<?php
require_once '../controller/autoload.php';
require_once '../config/config.php';
require_once '../model/Employee.php';

$id = $_GET['id'];
$link = new Database();
$query = "DELETE FROM employee WHERE emp_id = '$id'";
$RESULT = $link->query($query); 
if (!RESULT) {
				echo " Not deleted";
} else { 
    header("Location:mainPage.php");
}
?> 
