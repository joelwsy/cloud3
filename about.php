<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}


?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us || TARUMT GRADUATION POS</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

  <?php include 'include/header.php'; ?>


    <div class="row" style="margin-top:30px;">
      <div class="small-12">
        <p>BOLT Sports Shop is a project on E-Commerce Website. All products listed are fake. This project just gives a preview to what a real world implementation of E-Commerce Website will look like. Well if you do like the website then visit
        <a href="http://www.techbarrack.com" target="_blank" rel="noopener noreferrer" title="Tech Barrack Solutions">Tech Barrack Solutions</a>.</p>

        <p>Why BOLT? I am a big fan of Usain Bolt. He is diligent and tries to surpass his previous achievements. And lastly, it was an instant thought. So went for it.</p>

        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; BOLT Sports Shop. All Rights Reserved.</p>
        </footer>

      </div>
    </div>







    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
