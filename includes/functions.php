<?php
  
  // Learn more about preg_replace: http//php.net/manual/en/function.preg-replace.php

  function strip_bad_chars( $input ) {
      $output = preg_replace( "/[^a-zA-Z0-9_-]/", "", $input );
      return $output;
  };

   // Calculate Suggested Tip
  function suggestedTip($price, $tip) {
      $total = $price * $tip;
      return sprintf('%.2f', $total);
  };
  

?>