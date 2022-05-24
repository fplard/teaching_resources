<?php

$page = $_POST["page"];
$section = $_POST["section"];
$title = $_POST["title"];
$type = $_POST["type"];
$lvl = $_POST["level"];
$author = $_POST["author"];
$year = $_POST["year"];
$url = $_POST["url"];
$name = $_POST["name"];
$email = $_POST["email"];
$desc = $_POST["description"];
$mess = $_POST["message"];

$message=<<<EOF
This is an email from LearnEcoStat.
A new resource has been suggested for your page. Could you please check the following suggestion and add it to your page if suitable.
Thanks for your help.
All the best,
The learnecostat team

"$page": "$section:"

|*"$title"** *"$author"* -- "$desc" |`r ilink("$type", "$url", lvl="$lvl")`|
suggestion made by:  "$name" ("$email")

Any included message: "$mess"

EOF;
// to be change for destinataire
switch ($page) {
    case "r":
        $dest= "floriane.c.plard@gmail.com";
        break;
    case "ethics":
        $dest= "sandra.hamel@bio.ulaval.ca"
        break;
    case "data":
        $dest= "floriane.c.plard@gmail.com";
        break;
    case "stats":
        $dest= "floriane.c.plard@gmail.com";
        break;
    case "maths":
        $dest= "frederic.barraquand@u-bordeaux.fr";
        break;
    case "regression":
        $dest= "nigel.yoccoz@uit.no";
        break;
    case "bayesian":
        $dest= "olivier.gimenez@cefe.cnrs.fr";
        break;
   case "multivariate":
        $dest= "stephane.dray@univ-lyon1.fr";
        break;
    case "machine":
        $dest= "floriane.c.plard@gmail.com";
        break;
    case "demography":
        $dest= "sarah.cubaynes@cefe.cnrs.fr";
        break;
    case "population":
        $dest= "floriane.c.plard@gmail.com";
        break;
   case "spatial":
        $dest= "floriane.c.plard@gmail.com";
        break;
   case "community":
        $dest= "floriane.c.plard@gmail.com";
        break;
   case "qgenetics":
        $dest= "pierre.devillemereuil@ephe.psl.eu";
        break;
}

// envoi d'un email
mail($dest, "New resource to check on Learn EcoStats", $message);


?>