
<?php require_once("database.php");
        class user{
              
        public function validate($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
                  }
    if(isset($_POST['submit'])){
	if (empty($_POST["firstName"])) {
		$firstnameError = "firstName is required";
	} else {
		$firstname = validate($_POST["firstname"]);
		// check name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
			$firstnameError = "Only letters and white space allowed";
		}
	}
	if (empty($_POST["lastname"])) {
		$lastnameError = "lastName is required";
	} else {
		$lastname = validate($_POST["lastname"]);
		// check name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
			$lastnameError = "Only letters and white space allowed";
		}
	}
	if (empty($_POST["email"])) {
		$emailError = "Email is required";
	} else {
		$email = validate($_POST["email"]);
		// check if e-mail address syntax is valid or not
		if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
			$emailError = "Invalid email format";
		}
	}
	if(empty($_POST["mobileno"])){
		$mobilenoError="enter your mobile number";
	} else {
		$mobileno = validate($_POST["mobileno"]);
		if(strlen($mobileno)<10){
			$mobilenoError = "mobileno should be a ten digit";
		}
		if (empty($_POST["gender"])) {
			$genderError = "Gender is required";
		} else {
			$gender = validate($_POST["gender"]);
		}
	}
	
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
