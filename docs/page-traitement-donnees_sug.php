<?php

$name = $_POST["name"];
$email = $_POST["email"];
$mess = $_POST["message"];

$message=<<<EOF
This is an email from LearnEcoStat.
A new suggestion has been made.
All the best,
The learnecostat team


suggestion made by:  "$name" ("$email")

"$mess"

EOF;
 $dest= "floriane.c.plard@gmail.com";
 

// envoi d'un email
mail($dest, "New suggestion on Learn EcoStats", $message);


?>