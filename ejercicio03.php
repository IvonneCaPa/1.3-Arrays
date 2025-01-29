<?php
    $words = array("holas", "Phps", "HtSmsl");
    $character = "s";


    function compare(array $words, string $character) : bool {
      foreach ($words as $word) {
          
          if (strpos(strtolower($word), strtolower($character)) === false) {
              return false; 
          }   } 
      return true; 

    }
    
    echo compare($words, $character) ? "true" : "false"; 

 ?>