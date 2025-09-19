<?php
if (!empty($_POST['username']) && !empty($_POST['pin'])) {
    $username = "John";
    $pin = "Rambo";
   if ($_POST['username'] === $username && $_POST['pin'] === $pin){
       echo "C’est pas ma guerre";
   }else{
       echo "Votre pire cauchemar";
   } 
}