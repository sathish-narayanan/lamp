<?php

class AddUser{
	const MIN_PASSWORD_SIZE= 7;
	const MAX_DAY_SIZE = 31;
	const MAX_MONTH_SIZE = 12;
	const MAX_YEAR_SIZE = 2015;
	public $userName = "";
	public $password = "";
	public $confirmPassword ="";
	public $mobileNo = "";
	public $email = "";
	public $day = "";
	public $month = "";
	public $year = "";
	public function __construct ($input) {
		if (is_array($input)) {
		$this->userName = $input['userName'];
		$this->password = $input['password'];
		$this->confirmPassword = $input["confirmPassword"];
		$this->mobileNo = $input["mobileNo"];
		$this->email = $input["email"];
		$this->day = $input["day"];
		$this->month = $input["month"];
		$this->year = $input["year"];
		}
		}
	
    public function validate()
	{
		$validate = false;
		$errorFlag = false;
		$errorMessage = "";
		if(empty($this->userName)) {
		}
		if(!ctype_alpha($this->userName)) {
			$errorMessage[] = "You forgot to enter a valid userName";
			$errorFlag = true;
			$validate = true;
		}

		if(empty( $this->password )) {
			$errorMessage[] = "enter a valid passworrd";
			$errorFlag = true;
			$validate = true;
		}
		if(!ctype_digit( $this->mobileNo) OR strlen( $this->mobileNo) != 10) {
			$errorMessage[] = "Enter a valid phone number";
			$errorFlag = true;
			$validate = true;
		}
		if(strlen( $this->password )<self::MIN_PASSWORD_SIZE){
			$errorMessage[] = "password too weak";
			$errorFlag = true;
			$validate = true;
		}
		if(empty( $this->confirmPassword )) {
			$errorMessage[] = "You forgot to enter confirm password column!</li>";
			$errorFlag = true;
			$validate = true;
		}
		if($this->password !=  $this->confirmPassword ){
			$errorMessage[] = "password didnt match";
			$errorFlag = true;
			$validate = true;
		}
		if(strlen($this->day)>self::MAX_DAY_SIZE){
			$errorMessage[] = "enter valid day date";
			$errorFlag = true;
			$validate = true;
		}
		if(strlen($this->month)>self::MAX_MONTH_SIZE){
			$errorMessage[] = "enter valid month date";
			$errorFlag = true;
			$validate = true;
		}
		if(strlen($this->year)>self::MAX_YEAR_SIZE){
			$errorMessage[] = "password too weak";
			$errorFlag = true;
			$validate = true;
		}
		if(empty($this->email)) {
			$errorMessage[] = "You forgot to enter confirm password column!</li>";
			$errorFlag = true;
			$validate = true;
		}
		if($validate == true) {
			$data = implode("<br>", $errorMessage);
			echo $data;
		}
		
		else {
			return true;
		}
		
	}
	
	public function AddUser(){
			
		$link = mysqli_connect(DB_IP,DB_USER,DB_PASSWORD,DB_NAME);
		if (!$link) {

			echo mysqli_connect_errno().PHP_EOL;
			echo mysqli_connect_error().PHP_EOL;
		}
		else {
			
			$sql = "INSERT INTO login(userName,email_id,password,mobile_no,day,month,year) VALUES('$this->userName','$this->email','$this->password','$this->mobileNo','$this->day','$this->month','$this->year')";
			if(mysqli_query($link,$sql)){
				echo "Records added successfully.";
			}
			else {
				echo "<br>No records to insert";
			}
			mysqli_close($link);
		}

	}

}
?>




 