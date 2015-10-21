<?php
require_once 'databaseConnect.php';

class LoginUser{
	const MAX_PASSWORD_SIZE=7;
	const MAX_DAY_SIZE = 31;
	const MAX_MONTH_SIZE = 12;
	const MAX_YEAR_SIZE = 2015;
	
	public $values = array();
	public $data = array();
	public $userName = "";
	public $password = "";
	public $confirmPassword="";
	public $mobileNo = "";
	public $email= "";
	public $day = "";
	public $month = "";
	public  $year ="";
	public function __construct($input){
		if (is_array($input)) {
			$this->userName = $input['userName'];
			$this->password = $input['password'];
			$this->confirmPassword = $input['confirmPassword'];
			$this->mobileNo =$input['mobileNo'];
			$this->email = $input['email'];
			$this->day = $input['day'];
			$this->month = $input['month'];
			$this->year = $input['year'];
		}
	}
	
     
    public function validate()
	   { 
	   	$validate=array('$errorMessage[]'=>"", '$errorFlag' => false);
	   	if(empty($this->userName)) {
		    $errorMessage[] ="you forget to enter username";
	        $errorFlag = true;
	   	}
        if(!ctype_alpha($this->userName)) {
		    $errorMessage[] = "You forgot to enter a valid userName";
	        $errorFlag = true;
        }

	    if(empty($this->password)) {
			$errorMessage[] = "enter a valid passworrd";
			$errorFlag = true;
	    }
		if(!ctype_digit($this->mobileNo) OR strlen($this->mobileNo) != 10) {
			$errorMessage[] = "Enter a valid phone number";
			$errorFlag = true;
		}
		if(strlen($this->password)<self::MAX_PASSWORD_SIZE){
			$errorMessage[] = "password too weak";
            $errorFlag = true;		
		}
		if(empty($this->confirmPassword)) {
			$errorMessage[] = "You forgot to enter confirm password column!</li>";
			$errorFlag = true;
		}
		if($this->password != $this->confirmPassword){
			$errorMessage[] = "password didnt match";
			$errorFlag = true;
		}
		if(strlen($this->day)>self::MAX_DAY_SIZE){
			$errorMessage[] = "enter valid day date";
			$errorFlag = true;
		}
		if(strlen($this->month)>self::MAX_MONTH_SIZE){
			$errorMessage[] = "enter valid month date";
			$errorFlag = true;
		}
		if(strlen($this->year)>self::MAX_YEAR_SIZE){
			$errorMessage[] = "password too weak";
			$errorFlag = true;
		}
		if(empty($this->email)) {
			$errorMessage[] = "You forgot to enter confirm password column!</li>";
			$errorFlag = true;
		}
		if($errorFlag == true){
			 echo "invalid data";
		
		}
		else{
			$addUser=new loginAddUser();
			$addUser->loginAddUser();
			echo "submitted";
		}
	
	    foreach ( $invalid as $errorMessage){
		return $invalid;
	
	}
	   	}

	public function loginAddUser(){
	    if (!$link) {
	    	$link = mysqli_connect(DB_IP,DB_USER,DB_PASSWORD,DB_NAME);
	
		echo mysqli_connect_errno().PHP_EOL;
		echo mysqli_connect_error().PHP_EOL;
	}
	    else {
	   	echo "success";
	   	$sql = "INSERT INTO login(userName,email_id,password,mobileNo,day,month,year) VALUES('$userName', '$email', '$password', '$mobileNo',$day','$month','$year')";
	   	if(mysqli_query($link, $sql)){
	   	echo "Records added successfully.";
	   	 } 
   	mysqli_close($link);
   }
	
}

}		
?>




 
