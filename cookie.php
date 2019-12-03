<?php
session_start();
$uname = $_COOKIE["cname"];
$uemail = $_COOKIE["cemail"];
$upass = $_SESSION["spass"];
$umobile = $_SESSION["smobile"];

echo $uname . "<Br/>"; ;
echo $uemail . "<Br/>";;
echo $umobile . "<Br/>";;
?>
