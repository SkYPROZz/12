<?php

$host = "PC-shop";
$User = "root";
$Password = "";
$Namebaza = "bazadanyx";
$conn = mysqli_connect($host, $User, $Password, $Namebaza);
if (!$conn) {
    die("ERROR!");
}

?>