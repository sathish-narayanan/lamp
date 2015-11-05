<?php
class Employee 
{
	public $firstName = "";
	public $lastName = "";
	public $gender = "";
	public $nationality = "";
	public $dob = "";
	public $designation = "";
	public $office = "";
	public $address = "";
	public $bloodgroup = "";
	public function __construct($input) 
	{
	    $this->firstName = $input['firstName'];
		$this->lastName = $input['lastName'];
		$this->gender = $input['gender'];
		$this->nationality = $input["nationality"];
		$this->dob = $input["dob"];
		$this->designation = $input["designation"];
		$this->office = $input["office"];
		$this->address = $input["address"];
		$this->bloodgroup = $input["bloodgroup"];		
		$this->db = new Database();
	}	
	public function validate()
	{
		$validate = array('errorFlag' => false, 'errorMessage' => "");
		if (empty($this->firstName)) {
			$validate['errorMessage'] = "You forgot to enter firstName";
			$validate['errorFlag'] = true;
		} elseif (!ctype_alpha($this->firstName)) {
			$validate['errorMessage'] = "You forgot to enter a valid firstName";
			$validate['errorFlag'] = true;
		} elseif(empty($this->lastName)) {
			$validate['errorMessage'] = "You forgot to enter lastName";
			$validate['errorFlag'] = true;
		} elseif (!ctype_alpha($this->lastName)) {
			$validate['errorMessage'] = "You forgot to enter a valid lastName";
			$validate['errorFlag'] = true;
		} elseif (empty( $this->gender )) {
			$validate['errorMessage'] = "select the gender";
			$validate['errorFlag'] = true;
		} elseif (empty( $this->nationality )) {
			$validate['errorMessage'] = "select the nationality";
			$validate['errorFlag'] = true;
		} elseif (empty( $this->dob )) {
			$validate['errorMessage'] = "enter the dob";
			$validate['errorFlag'] = true;
		} elseif (empty( $this->designation )) {
			$validate['errorMessage'] = "select the designation";
			$validate['errorFlag'] = true;
		} elseif (empty( $this->office )) {
			$validate['errorMessage'] = "select the office";
			$validate['errorFlag'] = true;
		} elseif (empty( $this->address )) {
			$validate['errorMessage'] = "enter your address";
			$validate['errorFlag'] = true;
		} elseif (empty( $this->bloodgroup )) {
			$validate['errorMessage'] = "select the bloodgroup";
			$validate['errorFlag'] = true;
		}
		
		return $validate;
	}
	public function addEmployee() 
	{
		$sql = "INSERT INTO employee(firstname,lastname,gender,DOB,nationality,address,bloodgroup,designation,office) VALUES('$this->firstName','$this->lastName','$this->gender','$this->dob','$this->nationality','$this->address','$this->bloodgroup','$this->designation','$this->office')";
		if ($this->db->query($sql)) {
			header("Location:mainPage.php");
		} else {
		      echo "<br>NO RECORDS ADDED";
		}			
	}
}
?>

    





 