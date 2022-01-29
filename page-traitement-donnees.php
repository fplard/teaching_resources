<?php

$page = $_POST["page"];
$section = $_POST["section"];
$title = $_POST["title"];
$type = $_POST["type"];
$lvl = $_POST["level"];
$author = $_POST["author"];
$year = $_POST["year"];
$url = $_POST["url"];
$desc = $_POST["description"];
$mess = $_POST["message"];

$messsage=<<<EOF
This is an email from LearnEcoStat.
A new resource has been suggested for your page. Could you please check the following suggestion and add it to your page if suitable.
Thanks for your help.
All the best,
The learnecostat team

$page: "$section:"

|*"$title"** *"$author"* -- "$desc" |`r ilink("$type", "$url", lvl="$lvl")`|

Any include message: "$mess"

EOF;
// to be change for destinataire
switch ($page) {
    case 0:
        $d= "a";
        break;
    case 1:
        echo "i égal 1";
        break;
    case 2:
        echo "i égal 2";
        break;
}
$dest="floriane.c.plard@gmail.com"

// envoi d'un email
mail($dest, "New resource to check on $page", $message);


?>