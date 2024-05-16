<?php
if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
include 'config.php';
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shopping Cart || TARUMT GRADUATION POS</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

  <?php include 'include/header.php'; ?>

    <div class="row" style="margin-top:10px;">
      <div class="large-12">
        <?php

        echo '<p><h3>Your Shopping Cart</h3></p>';

        if (isset($_SESSION['cart'])) {

          $total = 0;
          echo '<table>';
          echo '<tr>';
          echo '<th>Code</th>';
          echo '<th>Name</th>';
          echo '<th>Quantity</th>';
          echo '<th>Cost</th>';
          echo '</tr>';
          foreach ($_SESSION['cart'] as $product_id => $quantity) {

            $result = $mysqli->query("SELECT product_code, product_name, product_desc, qty, price FROM products WHERE id = " . $product_id);

            if ($result) {

              while ($obj = $result->fetch_object()) {
                $cost = $obj->price * $quantity; // Work out the line cost
                $total = $total + $cost; // Add to the total cost

                echo '<tr>';
                echo '<td>' . $obj->product_code . '</td>';
                echo '<td>' . $obj->product_name . '</td>';
                echo '<td>' . $quantity . '&nbsp;<a class="button [secondary success alert]" style="padding:5px;" href="update-cart.php?action=add&id=' . $product_id . '">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="update-cart.php?action=remove&id=' . $product_id . '">-</a></td>';
                echo '<td>' . $cost . '</td>';
                echo '</tr>';
              }
            }
          }

          echo '<tr>';
          echo '<td colspan="3" align="right">Total</td>';
          echo '<td>' . $total . '</td>';
          echo '</tr>';

          echo '<tr>';
          echo '<td colspan="4" align="right"><a href="update-cart.php?action=empty" class="button alert">Empty Cart</a>&nbsp;<a href="products.php" class="button [secondary success alert]">Continue Shopping</a>';
          if (isset($_SESSION['username'])) {
            echo '<form action="checkout.php" method="POST" style="display:inline;">';
            echo '<button type="submit" style="float:right;">COD</button>';
            echo '</form>';
          } else {
            echo '<a href="login.php"><button style="float:right;">Login</button></a>';
          }

          echo '</td>';
          echo '</tr>';
          echo '</table>';
        } else {
          echo "You have no items in your shopping cart.";
        }

        echo '</div>';
        echo '</div>';
        ?>

    <div class="row" style="margin-top:10px;">
      <div class="small-12">
        <?php include 'include/footer.php'; ?>
      </div>
    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
