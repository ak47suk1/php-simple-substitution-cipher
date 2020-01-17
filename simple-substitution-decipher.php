
<?php

// set codemap/secret key here
const AKSARASULIT = "rkfwzodacpjex8th3msyn0791g24uql5i6bv";

//add more of charset if you want
const AKSARAASLI = "abcdefghijklmnopqrstuvwxyz0123456789";

function encrypt($string){
    
    return strtr($string, AKSARAASLI, AKSARASULIT);
  }

function decrypt($string){
    
    return strtr($string, AKSARASULIT, AKSARAASLI);
  }

// Example of usage:
// Encrypt:
echo encrypt("\n buy mercedes first \n");
echo encrypt("\n beliau \n");
// Decrypt:
echo decrypt("\n kn1 xzmfzwzs ocmsy \n");
echo decrypt("\n kzecrn \n");


?>