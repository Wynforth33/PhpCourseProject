<?php 
  define("TITLE", "Menu Item | Franklin's Fine Dining");

  include('includes/header.php');

  // Check if GET is set. 
  if ( isset( $_GET['item'] ) ) {
      $menuItem = strip_bad_chars( $_GET['item'] );
      $dish = $menuItems[$menuItem];
  };
  
?>

  <hr>
  
  <div id="dish">
      
      <h1><?php echo $dish["title"]; ?> <span class="price"><sup>$</sup><?php echo $dish["price"]; ?></span></h1>
      <p><?php echo $dish["blurb"]; ?></p>
      
      <br>
      
      <p><strong>Suggested Beverage: <?php echo $dish["drink"]; ?></strong></p>
      <p><em>Suggested Tip: <sup>$</sup><?php echo suggestedTip($dish["price"],0.20)?></em></p>
      
  </div>
  
  <hr>
  
  <a href="menu.php" class='button previous'>&laquo; Back to Menu</a>

<?php include('includes/footer.php'); ?>
