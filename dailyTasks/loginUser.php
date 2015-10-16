<?php
class loginUser{
	
	
     
      public function validate()
	   { 
	   	$MIN_PASSWORD_SIZE= 7;
	   	$MAX_DAY_SIZE = 31;
	   	$MAX_MONTH_SIZE = 12;
	   	$MAX_YEAR_SIZE = 2015;
	   	$errorMessage = array();
	   	$errorFlag = false;
	   	if(isset($_POST['submit'])){
	    $userName = $_POST['userName'];
	   	$password = $_POST['password'];
	   	$confirmPassword = $_POST['confirmPassword'];
	   	$mobileNo = $_POST['mobileNo'];
	   	$email = $_POST['email'];
	   	$day = $_POST['day'];
	   	$month = $_POST['month'];
	   	$year = $_POST['year'];
	   	if(empty($userName)) {
		    $errorMessage[] ="you forget to enter username";
	        $errorFlag = true;
	   	}
        if(!ctype_alpha($userName)) {
		    $errorMessage[] = "You forgot to enter a valid userName";
	        $errorFlag = true;
        }

	    if(empty($password)) {
			$errorMessage[] = "enter a valid passworrd";
			$errorFlag = true;
	    }
		if(!ctype_digit($mobileNo) OR strlen($mobileNo) != 10) {
			$errorMessage[] = "Enter a valid phone number";
			$errorFlag = true;
		}
		if(strlen($password)<$MIN_PASSWORD_SIZE){
			$errorMessage[] = "password too weak";
            $errorFlag = true;		
		}
		if(empty($confirmPassword)) {
			$errorMessage[] = "You forgot to enter confirm password column!</li>";
			$errorFlag = true;
		}
		if($password !== $confirmPassword){
			$errorMessage[] = "password didnt match";
			$errorFlag = true;
		}
		if(strlen($day)>$MAX_DAY_SIZE){
			$errorMessage[] = "enter valid day date";
			$errorFlag = true;
		}
		if(strlen($month)>$MAX_MONTH_SIZE){
			$errorMessage[] = "enter valid month date";
			$errorFlag = true;
		}
		if(strlen($year)>$MAX_YEAR_SIZE){
			$errorMessage[] = "password too weak";
			$errorFlag = true;
		}
		if(empty($email)) {
			$errorMessage[] = "You forgot to enter confirm password column!</li>";
			$errorFlag = true;
		}
		if($errorFlag == true){
			 echo "invalid data";
		
		}
		else{
			$this->loginAddUser();
			echo "submitted";
		}
	
	foreach ($errorMessage as $invalid){
		echo $invalid;
		return false;
	}
	   	}
}
	public function loginAddUser(){
	$link = mysqli_connect(dbIp,dbUser,dbPassword,dbName );
if (!$link) {

	echo mysqli_connect_errno().PHP_EOL;
	echo mysqli_connect_error().PHP_EOL;
	exit;
   }
   else {
   	$sql = "INSERT INTO login(userName,email_id,password,mobileNo,day,month,year) VALUES ('$userName', '$email', '$password', '$mobileNo',$day','$month','$year')";
   	if(mysqli_query($link, $sql)){
   	echo "Records added successfully.";
   	 } 
   	mysqli_close($link);
   }
	
}

}		

$obj  = new loginUser();
$obj -> validate();

?>




 
