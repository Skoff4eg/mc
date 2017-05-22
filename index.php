<?php
//namespace Classes;
function __autoload($className){
    $className =  strtolower($className);
    include_once("classes/".$className.".class.php");
}
$mail = "a";
$user = new User($mail);
?>