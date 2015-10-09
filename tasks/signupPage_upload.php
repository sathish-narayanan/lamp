
<?php
include("database.php");
if(isset($_POST['submit'])){
$firstName =  $_POST['firstName'];
$lastName =  $_POST['lastName'];
$month =  $_POST['month'];
$day =  $_POST['day'];
$year = $_POST['year'];
$email = $_POST['email'];
$password =  $_POST['password'];
$confirmPassword =  $_POST['confirmPassword'];
$mobileNo =  $_POST['mobileNo'];
$gender = $_POST['gender'];
$address =  $_POST['address'];
$location = $_POST['location'];
$pincode =  $_POST['pincode'];
$state = $_POST['state'];
$country =  $_POST['country'];
$sql = "INSERT INTO signup (firstName, lastName, month, day, year, email, password, confirmPassword,mobileNo, gender, address,location,pincode,state, country) VALUES ('$firstName', '$lastName', '$month', '$day', '$year', '$email', '$password', '$confirmPassword', '$mobileNo', '$gender', '$address', '$location', '$pincode', '$state', '$country')";
}
/*if(mysqli_query($link, $sql)){
     echo "Records added successfully.";
     } else{
     echo "ERROR: Could not able to execute" . mysqli_error($link);
      }
      
  if(!mysqli_query($link, $sql)){
        die('Error : '. mysqli_connect_error());
       }*/    
?>

