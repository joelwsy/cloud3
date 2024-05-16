<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

// Start session if not already started
if(session_id() == '' || !isset($_SESSION)){session_start();}

//Two-step authentication -> security key: xjba-yxfl-egoj-csgp-sido

require_once 'stripe-php-14.7.0-beta.1/init.php';
include 'config.php';

$stripe_secret_key = "sk_test_51PGe7Q2NleBp7F6PwYmLNdrM0lskFxueMNjO4h2xzDErCmICmujaPPW5Y4aJM1ELXMakIyWdDlcVRUlKOihYBQXR00Rcagze64";

\Stripe\Stripe::setApiKey($stripe_secret_key);

// Initialize an empty array for line items
$line_items = [];

if(isset($_SESSION['cart'])) {
    foreach($_SESSION['cart'] as $product_id => $quantity) {
        $result = $mysqli->query("SELECT * FROM products WHERE id = ".$product_id);
        if($result) {
            if($obj = $result->fetch_object()) {
                // Add each product to the line_items array
                $line_items[] = [
                    'quantity' => $quantity,
                    'price_data' => [
                        'currency' => 'myr',
                        'unit_amount' => $obj->price * 100,
                        'product_data' => [
                            'name' => $obj->product_name
                        ]
                    ]
                ];
            }
        }
    }
}

// Create the checkout session
$checkout_session = \Stripe\Checkout\Session::create([
    'mode' => 'payment',
    'success_url' => 'http://tarumt-alb-35825639.us-east-1.elb.amazonaws.com/orders-update.php',
    'cancel_url' => 'http://tarumt-alb-35825639.us-east-1.elb.amazonaws.com/index.php',
    'locale' => 'auto',
    'line_items' => $line_items
]);

http_response_code(303);
header("Location: " . $checkout_session->url);
