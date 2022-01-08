<?php

function palindrome($string){
     
    if (substr($string,0,1) == substr($string,(strlen($string) - 1),1)){
             
            echo "yes it is Palindrome";
        }
     else{
            echo " Not a Palindrome";
	 }
    }

 
$string = "ridvan";
palindrome($string);