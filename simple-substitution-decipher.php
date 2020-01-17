
<?php

const AKSARASULIT = "rkfwzodacpjex8th3msyn0791g24uql5i6bv";
const AKSARAASLI = "abcdefghijklmnopqrstuvwxyz0123456789";

function encrypt($string){
    
    return strtr($string, AKSARAASLI, AKSARASULIT);
  }

function decrypt($string){
    
    return strtr($string, AKSARASULIT, AKSARAASLI);
  }

echo encrypt("\n babi \n");
echo encrypt("\n beliau \n");
echo decrypt("\n krkc \n");
echo decrypt("\n kzecrn \n");


?>
