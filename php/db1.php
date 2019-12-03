<?php
try{
    $con=new PDO("mysql:host=192.168.100.26;dbname=group020","group020","welcome");
    echo "connected";
}
catch(PDOException $ex){
    echo $ex->getMessage();
}