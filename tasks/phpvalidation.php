<?php
// Initialize variables to null.
$firstnameError ="";
$lastnameError = "";
$monthError="";
$dayError="";
$yearError="";
$emailError ="";
$passwordError="";
$reenterpassworError="";
$mobilenoError="";
$genderError ="";
$addressError="";
$locationError="";
$pincodeError="";
$stateError="";
$countryError="";
if(isset($_POST['submit'])){
	if (empty($_POST["firstname"])) {
		$firstnameError = "firstName is required";
	} else {
		$firstname = test_input($_POST["firstname"]);
		// check name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
			$firstnameError = "Only letters and white space allowed";
		}
	}
	if (empty($_POST["lastname"])) {
		$lastnameError = "lastName is required";
	} else {
		$lastname = test_input($_POST["lastname"]);
		// check name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
			$lastnameError = "Only letters and white space allowed";
		}
	}
	if (empty($_POST["email"])) {
		$emailError = "Email is required";
	} else {
		$email = test_input($_POST["email"]);
		// check if e-mail address syntax is valid or not
		if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
			$emailError = "Invalid email format";
		}
	}
	if(empty($_POST["mobileno"])){
		$mobilenoError="enter your mobile number";
	} else {
		$mobileno = test_input($_POST["mobileno"]);
		if(strlen($mobileno)<10){
			$mobilenoError = "mobileno should be a ten digit";
		}
		if (empty($_POST["gender"])) {
			$genderError = "Gender is required";
		} else {
			$gender = test_input($_POST["gender"]);
		}
	}
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$link=mysqli_connect('localhost','root','aspire@123','sathish');

	if(mysqli_connect_errno($link))
	{
		echo 'Failed to connect';
	} else {
		echo "success....connected to database";
	}
		$sql="insert into validate VALUES('$firstname','$lastname','$month','$day','$year','$email','$password','$reenter_password','$address','$location','$pincode','$state','$country')";
		if(mysqli_query($link,$sql)){
			echo "records added successfully";
		} else{
			echo "ERROR: could not add the records".mysqli_error($link);
		}
		mysqli_close($link);
}
		?>
