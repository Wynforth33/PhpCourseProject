<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Code Dynamic Websites with PHP</title>
    <link rel="stylesheet" href="/assets/styles.css">
  </head>
  <body id="final-example">

    <div class="wrapper">

      <div id="banner">
        <a href="/" title="Return to Home">
          <img src="img/banner.png" alt="Franklin's Fine Dining" />
        </a>
      </div><!-- .banner -->

      <div id="nav">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="team.php">Team</a></li>
          <li><a href="menu.php">Menu</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div><!-- nav -->

      <div class="content">

        <div id="footer" class="cf">

          <div class="column three">
            <strong>Phone</strong>
            808.529.3819
          </div><!-- column -->

          <div class="column three">
            <strong>Location</strong>
            133 Kapiolani Boulevard
            Honolulu, HI
          </div><!-- column -->

          <div class="column three last">
            <strong>Hours</strong>
            <em>Tuesday - Thursday</em><br />
            1:00pm - 9:00pm<br /><br />

            <em>Friday - Saturday</em><br />
            4:00pm - 11:00pm<br /><br />

            <em>Sunday - Monday</em><br />
            Closed<br /><br />
          </div><!-- column -->
          
        </div><!-- footer -->

        <small>&copy;<?php echo date('Y'); ?> Brad Hussey</small>

      </div><!-- content -->
    </div><!-- .wrapper -->

    <div class="copyright-info">
      <?php include('../../assets/includes/copyright.php'); ?>
    </div><!-- copyright-info -->

  </body>
</html>
