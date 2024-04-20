
<?php 
include "query/loginReg.php";
// echo $_SESSION["type"];

?>
<!DOCTYPE html>
<html>
<head>
  <title>MiniStore</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500&family=Lato:wght@300;400;700&display=swap"
    rel="stylesheet">
  <!-- script
    ================================================== -->
  <script src="js/modernizr.js"></script>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true"
  tabindex="0">
  
  <!-- header -->
  <?php
  include "header.php";
  ?>
  <!-- symbol -->
  <?php
  include "symbol.php";
  ?>
  <!-- search -->
  <?php
  include "search.php";
  ?>
  
  <!-- bord -->
  <?php
  include "bord.php";
  ?>
  <!-- service -->
  <?php
  include "service.php";
  ?>
  <!-- mobile -->
  <?php
  include "mobile.php";
  ?>
  <!-- watch -->
  <?php
  include "watch.php";
  ?>
  <!-- sale -->
  <?php
  include "sale.php";
  ?>
  <!-- latest -->
  <?php
  include "latest.php";
  ?>
  <!-- content
    <?php
    include "content.php";
    ?> -->
  <!-- subscribe -->
  <?php
  include "subscribe.php";
  ?>
  <!-- insta -->
  <?php
  include "insta.php";
  ?>
  <!-- footer -->
  <?php
  include "footer.php";
  ?>
  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="js/plugins.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</body>

</html>