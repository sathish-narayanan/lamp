<?php 
require_once '../model/Database.php';
require_once '../config/config.php';
?>
<html><head><title></title></head>
<body>
<?php 
$emp_id = $_POST['emp_id'];
$firstname = $_POST['firstName'];
$lastname = $_POST['lastName'];
$birthday = $_POST['dob'];
$office = $_POST['office'];
$designation = $_POST['designation'];
$address = $_POST['address'];
$link = new Database();
$query = "UPDATE employee SET firstname = '$firstname' , lastname = '$lastname' , 
	     DOB = '$birthday' , office = '$office' , designation = '$designation',
	     address = '$address' WHERE emp_id='$emp_id'";
$result = $link->query($query);
if (!result) {
    echo "not update";
} else {
    header("Location:../view/mainPage.php");
}
?>
<button type = "button" onclick = "window.location.href = ' ../view/mainPage.php' ">
</button>
</body>
</html>
