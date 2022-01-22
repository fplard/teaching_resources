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

echo shell_exec("Rscript my_script.R {$_GET['range']}");

?>