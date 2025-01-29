<?php
$words = array("holas", "Phps", "HtSmsl");
$character = "h";


 function todasTienenCaracter($words, $character) {
   foreach ($words as $word) {
       
       if (strpos(strtolower($word), strtolower($character)) === false) {
          return false; 
      }   } 
   return true; 

 }
 
 echo todasTienenCaracter($words, $character) ? "true" : "false"; 