<?php 
function __autoload($classname) {
    include_once("../model/$classname".".php"); 
}


?>