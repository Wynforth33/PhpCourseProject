<?php 
  $companyName = "Franklin's Fine Dining";
  include('includes/arrays.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    
  <head>
    <meta charset="utf-8">
    <title>Code Dynamic Websites with PHP</title>
    <link rel="stylesheet" href="styles/styles.css">
  </head>
    
  <body id="final-example">

    <div class="wrapper">

      <div id="banner">
        <a href="/" title="Return to Home">
          <img src="img/banner.png" alt="Franklin's Fine Dining" />
        </a>
      </div><!-- .banner -->

      <div id="nav">
        <?php include('includes/nav.php'); ?>
      </div><!-- nav -->

      <div class="content">
