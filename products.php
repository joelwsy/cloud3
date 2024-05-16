<?php
// Start the session if it's not already started
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Products || TARUMT GRADUATION POS</title>
    <link rel="stylesheet" href="css/foundation.css"/>
    <style>
        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-img {
            height: 200px; /* Adjust image height */
            overflow: hidden;
            border-bottom: 1px solid #ccc;
        }

        .card-img .img {
            background-size: cover;
            background-position: center;
            height: 100%;
            width: 100%;
        }

        .card-title {
            font-size: 1.2em;
            font-weight: bold;
            margin-top: 10px;
        }

        .card-subtitle {
            color: #666;
            margin-top: 5px;
        }

        .card-divider {
            margin-top: 10px;
            border: 0;
            border-top: 1px solid #ccc;
        }

        .card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
        }

        .card-price {
            font-size: 1.2em;
            font-weight: bold;
        }

        .card-btn {
            background: #0078A0;
            border: none;
            color: #fff;
            font-size: 1em;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .card-btn:hover {
            background: #00587d;
        }
    </style>
</head>
<body>

<?php include 'include/header.php'; ?>

<div class="row" style="margin-top:10px;">
    <div class="small-12">
        <?php
        $result = $mysqli->query('SELECT * FROM products');
        if($result === FALSE){
            die(mysql_error());
        }

        if($result){
            while($obj = $result->fetch_object()) {
                ?>
                <div class="small-12 medium-4 columns">
                    <div class="card">
                        <div class="card-img">
                            <div class="img" style="background-image: url('images/products/<?php echo $obj->product_img_name; ?>');"></div>
                        </div>
                        <div class="card-title"><?php echo $obj->product_name; ?></div>
                        <div class="card-subtitle"><?php echo $obj->product_desc; ?></div>
                        <hr class="card-divider">
                        <div class="card-footer">
                            <div class="card-price"><span>$</span> <?php echo $obj->price; ?></div>
                            <?php if($obj->qty > 0): ?>
                                <div>Stocks Left: <?php echo $obj->qty; ?></div>

                            <?php else: ?>
                                <div>Out Of Stock</div>
                            <?php endif; ?>
                        </div>
                        <div class="card-footer">
                            <a href="update-cart.php?action=add&id=<?php echo $obj->id; ?>" class="card-btn">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>

<?php include 'include/footer.php'; ?>

<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>
