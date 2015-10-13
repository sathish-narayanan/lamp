<?php

class User{
		const MAX_PASSWORD_SIZE = 7;
		const MAX_YEAR_LENGTH = 2015;
		public $error = array();
		public function __construct($input){
		$this->firstName = $input;
		$this->lastName = $input;
		$this->password = $input;
		$this->confirmPassword = $input;
		$this->email = $input;
		$this->mobileNo = $input;
		$this->pincode = $input;
		$this->location = $input;
		
	}
	public function validate(){
         $val = true;
		if (!ctype_alnum($firstName)) {
			$error[]="firstName should be alpha numeric characters only";
			$val = false;
		}
		elseif($firstName == ""){
			$error[] = "enter firstname";
			$val = false;
			
		}
		if (!ctype_alnum($lastName)) {
			$error[] = "lastName should be alpha numeric characters only";
			$val = false;
		}
		elseif($lastName == ""){
			$error[] = "enter last name";
			$val = false;
		}
		if (strlen($password) > $MAX_PASSWORD_SIZE) {
			$error[] = "Password should be above 7 characters long";
			$val = false;
		}
		if ($confirm_Password != $password) {
			$error[] = "enter correct password again";
			$val = false;
		}
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$error[] = "Enter a valid email address";
			$val = false;
		}
		if (!ctype_digit($phone) OR strlen($phone) != 10) {
			$error[] = "Enter a valid phone number";
			$val = false;
		}
		if ($gender != 'male' && $gender != 'female') {
			$error[] = "Please select your gender";
			$val = false;
		}
		if (intval($day)<1 OR intval($day)>31) {
			$error[] = "Enter a valid day between 1-31";
			$val = false;
		}
		if (intval($month)<1 OR intval($month)>12) {
			$error[] = "Enter a valid month between 1-12";
			$val = false;
		}
		if (intval($year)<1960 OR intval($year)>MAX_YEAR_LENGTH) {
			$error[] = "Enter a valid year";
			$val = false;
		}
		if ($location == 0) {
			$error[] = "Please select location";
			$val = false;
		}
		if (!ctype_digit($pincode) OR strlen($pincode) != 6) {
			$error[] = "Enter a valid pincode";
			$val = false;
		}
		if (strlen($address) == 0){
			$error[] ="enter your address";
			$val = false;
		}
		if ($location == 0) {
			$error[] = "Please select your location";
			$val = false;
		}
		return true;
	}
	
	public function addUser(){
	$sql = "INSERT INTO signup(firstName, lastName, password, confirmPassword, email, mobileNo, pincode ) VALUES ('$firstName', '$lastName', '$password','$confirmPassword', $email', '$mobileNo', '$pincode')";
	
	if(mysqli_query($link, $sql)){
	
		echo "Records added successfully.";
	
	} else{
	
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
}


