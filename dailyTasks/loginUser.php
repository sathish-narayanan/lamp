<?php 
class loginUser{
    const  MIN_PASSWORD_SIZE= 7;
    private $userName;
    private  $password;
    private $confirmPassword;
    public function __construct($input){
    	if(empty($input) || !is_array($input)){
    		throw new Exception("Invalid data!");
    	}
    }
    
    public function validate()
	   { 
	   	$errorMessage = array();
	   	if(empty($userName)) {
	$errorMessage[] .="you forget to enter username";
}
if(!ctype_alnum($userName)) {
	 $errorMessage[] .= "You forgot to enter a valid userName";
}

if(empty($password)) {
	$errorMessage[] .= "enter a valid passworrd";
}
if (!ctype_digit($mobileNo) OR strlen($mobileNo) != 10) {
	$this->errormessage['mobileNo']= "Enter a valid phone number";
}
if(empty($confirmPassword)) {
	$errorMessage[] .= "You forgot to enter confirm password column!</li>";
}
if($password !== $confirmPassword){
	$errormessage[] .= "password didnt match";
}
if(empty($email)) {
	$errorMessage[] .= "You forgot to enter confirm password column!</li>";
}
	   }
}
?>





