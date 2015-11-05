<?php
require_once '../model/Database.php';
require_once '../config/config.php';
require_once '../model/Employee.php';

$id = $_GET['id'];
$link = new Database();
$query = "DELETE FROM employee WHERE emp_id = '$id'";
$result = $link->query($query); 
if (!result) {
    echo " Not deleted";
} else { 
      header("Location:mainPage.php");
}
?> 
