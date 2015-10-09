<?php require_once("database.php");
class user{
	$error = "";
	function __construct(){
		public function validate(_POST['submit']){
		$$firstName = ($_POST['firstName']);
		$lastName = ($_POST['lastName']);
		$password = $_POST['password'];
		$confirm_Password = $_POST['confirm_Password'];
		$email = $_POST['email'];
		$phone	= $_POST['phone'];
		$gender	= $_POST['gender'];
		$day = $_POST['day'];
		$month = $_POST['month'];
		$year = $_POST['year'];
		$address = $_POST['address'];
		$pincode = $_POST['pincode'];
		$state = $_POST['state'];
		$country = $_POST['country'];
		}
	
	if (!ctype_alnum($firstName)) {
$error .= '<p class="error">firstName should be alpha numeric characters only.</p>';
}
   elseif($firstName==""){
   echo "enter user name";
    }
    if (!ctype_alnum($lastName)) {
		$error .= '<p class="error">lastName should be alpha numeric characters only.</p>';
	}
	elseif($lastName==""){
		echo "enter user name";
	}
	if (strlen($password) < 3 OR strlen($password) > 20) {
		$error .= '<p class="error">Password should be within 3-20 characters long.</p>';
	}
	if ($confirm_Password != $password) {
		$error .= '<p class="error">Confirm password mismatch.</p>';
	}
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
		$error .= '<p class="error">Enter a valid email address.</p>';
	}
	if (!ctype_digit($phone) OR strlen($phone) != 10) {
		$error .= '<p class="error">Enter a valid phone number.</p>';
	}
	if ($gender != 'male' && $gender != 'female') {
		$error .= '<p class="error">Please select your gender.</p>';
	}
		if (intval($day)<1 OR intval($day)>31) {
    $error .= '<p class="error">Enter a valid day between 1-31.</p>';
    }
    if (intval($month)<1 OR intval($month)>12) {
    $error .= '<p class="error">Enter a valid month between 1-12.</p>';
    }
	if (intval($year)<1960 OR intval($year)>2015) {
    $error .= '<p class="error">Enter a valid year.</p>';
    }
    if ($location == 0) {
    	$error .= '<p class="error">Please select location</p>';
    }
    if (!ctype_digit($mobileNo) OR strlen($mobileNo) != 6) {
    	$error .= '<p class="error">Enter a valid pincode.</p>';
    }
    if (strlen($address) == 0){
    	$error .='<p class="error">enter your address.</p>';
    }
    if ($location == 0) {
    	$error .= '<p class="error">Please select your location</p>';
    }
    }
    