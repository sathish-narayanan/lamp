<?php
//ini_set("display_errors", "1");

class User{
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
		    $this->db = new DatabaseConnect();
	}
	public function validate()
	{
		
		$validate = array($errorFlag = false,$errorMessage="");
		if (empty($this->userName)) {
			$validate[$errorMessage] = "You forgot to enter userName";
			$validate[$errorFlag] = true;
		}
		if (!ctype_alpha($this->userName)) {
			$validate[$errorMessage] = "You forgot to enter a valid userName";
			$validate[$errorFlag] = true;
		}
		if (empty( $this->password )) {
			$validate[$errorMessage] = "enter a valid passworrd";
			$validate[$errorFlag] = true;
		}
		if (!ctype_digit( $this->mobileNo) OR strlen( $this->mobileNo) != 10) {
			$validate[$errorMessage] = "Enter a valid phone number";
			$validate[$errorFlag] = true;
		}
		if (strlen( $this->password )<self::MIN_PASSWORD_SIZE) {
			$validate[$errorMessage] = "password too weak";
			$validate[$errorFlag] = true;
		}
		if (empty( $this->confirmPassword )) {
			$validate[$errorMessage] = "You forgot to enter confirm password column!</li>";
			$validate[$errorFlag] = true;
		}
		if ($this->password !=  $this->confirmPassword) {
			$validate[$errorMessage] = "password didnt match";
			$validate[$errorFlag] = true;
		}
		if (strlen($this->day)>self::MAX_DAY_SIZE) {
			$validate[$errorMessage] = "enter valid day date";
			$validate[$errorFlag] = true;
		}
		if (strlen($this->month)>self::MAX_MONTH_SIZE) {
			$validate[$errorMessage] = "enter valid month date";
			$validate[$errorFlag] = true;
		}
		if (strlen($this->year)>self::MAX_YEAR_SIZE) {
			$validate[$errorMessage] = "password too weak";
			$validate[$errorFlag] = true;
		}
		if (empty($this->email)) {
			$validate[$errorMessage] = "You forgot to enter confirm password column!</li>";
			$errorFlag = true;
		}
		return $validate;
		
	
	}
    public function addUser() {
		$sql = "INSERT INTO login(userName,email_id,password,mobile_no,day,month,year) VALUES('$this->userName','$this->email','$this->password','$this->mobileNo','$this->day','$this->month','$this->year')";
		if ($this->db->query($sql)) {
			echo "Records added successfully.";
		} else {
			echo "<br>No records to insert";
		  }
	}
}
?>




 