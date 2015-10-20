<?php
require_once 'databaseConnect.php';
class LoginUser{
	public $MIN_PASSWORD_SIZE= 7;
	public $MAX_DAY_SIZE = 31;
	public $MAX_MONTH_SIZE = 12;
	public $MAX_YEAR_SIZE = 2015;
	public $userName = "";
	public $password = "";
	public $confirmPassword ="";
	public $mobileNo = "";
	public $email = "";
	public $day = "";
	public $month = "";
	public $year = "";
	public $values = array();
	public $data = array();
	public function __construct(){
         
	 }
    public $info = array();
    public function __get($data) {
      return $this->info[$data];
    }
    public function __set($data, $value) {
      $this->info[$value] = $value;
    }   
    public function validate()
	   { 
	   	$errorMessage = array();
	   	$errorFlag = false;
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
		if(strlen($this->password)<$MIN_PASSWORD_SIZE){
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
		if(strlen($this->day)>$MAX_DAY_SIZE){
			$errorMessage[] = "enter valid day date";
			$errorFlag = true;
		}
		if(strlen($this->month)>$MAX_MONTH_SIZE){
			$errorMessage[] = "enter valid month date";
			$errorFlag = true;
		}
		if(strlen($this->year)>$MAX_YEAR_SIZE){
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
	
	    foreach ($errorMessage as $invalid){
		echo $invalid;
		return false;
	}
	   	}

	public function loginAddUser(){
			
		$link = mysqli_connect(DB_IP,DB_USER,DB_PASSWORD,DB_NAME);
	    if (!$link) {
	
		echo mysqli_connect_errno().PHP_EOL;
		echo mysqli_connect_error().PHP_EOL;
	}
	    else {
	   	echo "success";
	   	$sql = "INSERT INTO login(userName,email_id,password,mobileNo,day,month,year) VALUES('$this->userName', '$this->email', '$this->password', '$this->mobileNo',$this->day','$this->month','$this->year')";
	   	if(mysqli_query($link, $sql)){
	   	echo "Records added successfully.";
	   	 } 
   	mysqli_close($link);
   }
	
}

}		
?>




 
