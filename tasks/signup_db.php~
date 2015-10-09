<?php
$link = mysqli_connect("localhost", "root", "aspire@123", "sathish");
      if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
      }
      if(isset($_POST['submit'])){
$firstName =  $_POST['firstName'];
$lastName =  $_POST['lastName'];
$month =  $_POST['month'];
$day =  $_POST['day'];
$year = $_POST['year'];
$email = $_POST['email'];
$password =  $POST['password'];
$confirmPassword =  $POST['confirmPassword'];
$mobileNo =  $_POST['mobileNo'];
$gender = $_POST['gender'];
$address =  $_POST['address'];
$location = $_POST['location'];
$pincode =  $_POST['pincode'];
$state = $_POST['state'];
$country =  $_POST['country'];
$sql = "INSERT INTO signup (firstName, lastName, month, day, year, email, password, confirmPassword,mobileNo, gender, address,location,pincode,state, country) VALUES ('$firstName', '$lastName', '$month', '$day', '$year', '$email', '$password', '$confirmPassword', '$mobileNo', '$gender', '$address', '$location', '$pincode', '$state', '$country')";
     if(mysqli_query($link, $sql)){
     echo "Records added successfully.";
     } else{
     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
      }
      }
mysqli_close($link);

?>

