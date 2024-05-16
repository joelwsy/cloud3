<?php
header('Location: products.php');
exit;
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TAR UMT</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>

  <body>

<?php include 'include/header.php'; ?>



    <img data-interchange="[images/bolt-retina.png, (retina)], [images/bolt-landscape.png, (large)], [images/bolt-mobile.png, (mobile)], [images/bolt-landscape.png, (medium)]">
    <noscript><img src="images/bolt-landscape.png"></noscript>


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
