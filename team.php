<?php 
  define("TITLE", "Team | Franklin's Fine Dining");
  
  include('includes/header.php');
?>

  <div id="team-members" class="cf">
    
    <h1>Our Team at Franklin's</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias quos nemo accusamus, tenetur iusto voluptatum vero rem veniam, laborum numquam dolorum quasi eaque ipsa dolore rerum. <strong>Reiciendis similique saepe voluptate!</strong></p>
    
    <hr>
    
    <?php foreach ($teamMembers as $member){ ?>
    
      <div class="member">
       
        <img src="img/<?php echo $member[img];?>.png" alt="<?php echo $member[name]; ?>" />
        <h2><?php echo $member[name]; ?></h2>
        <p><?php echo $member[position]; ?></p>
        <p><?php echo $member[bio]; ?></p>
        
      </div><!-- member -->
    
    <?php } ?>
    
  </div><!-- team-member -->
  
  <hr>


<?php include('includes/footer.php'); ?>
