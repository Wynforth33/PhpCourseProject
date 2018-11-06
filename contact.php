<?php 

  define("TITLE", "Contact Us | Franklin's Fine Dining");

  include('includes/header.php');

  /*
		NOTE:
		In the form in contact.php, the name text field has the name "name"
		If the user submits the form, the $_POST['name'] variable will be
		automatically created, and will contain the text they typed into
		the field. The $_POST['email'] variable will contain whatever they typed
		into the email field.
	
	
		PHP used in this script:
		
		preg_match()
		- Perform a regular expression match
		- http://ca2.php.net/preg_match
		
		isset()
		- Determine if a variable is set and is not NULL
		- http://ca2.php.net/manual/en/function.isset.php
		
		$_POST
		- An associative array of variables passed to the current script via the HTTP POST method.
		- http://www.php.net/manual/en/reserved.variables.post.php
		
		trim()
		- Strip whitespace (or other characters) from the beginning and end of a string
		- http://www.php.net/manual/en/function.trim.php
		
		exit
		- Output a message and terminate the current script
		- http://www.php.net//manual/en/function.exit.php
		
		die()
		- Equivalent to exit
		- http://ca1.php.net/manual/en/function.die.php
		
		wordwrap()
		- Wraps a string to a given number of characters
		- http://ca1.php.net/manual/en/function.wordwrap.php
		
		mail()
		- Send mail
		- http://ca1.php.net/manual/en/function.mail.php
	*/

?>

  <div id="contact">
     
     <hr>
    
     <h1>Get in touch with us!</h1>
     
     <form method="post" action="" id="contact-form">
      
       <label for="name">Your Name</label>         
       <input type="text" id="name" name="name">
       
       <label for="email">Your Email</label>         
       <input type="email" id="email" name="email">
       
       <label for="message">Your Message</label>         
       <textarea id="message" name="message"></textarea>
       
       <input type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
       <label for="subscribe">Subscribe to newsletter</label> 
       
       <input type="submit" class="button next" name="contact_submit" value="Send Message">
               
     </form>
     
     <hr>
     
  </div><!-- contact -->




<?php include('includes/footer.php'); ?>