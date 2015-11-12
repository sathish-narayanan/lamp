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
        $validate = array('errorFlag' => false, 'errorMessage' => array());
        if (empty($this->firstName)) {
            array_push($validate['errorMessage'] , "You forgot to enter firstName");
            $validate['errorFlag'] = true;
        } elseif (!ctype_alpha($this->firstName)) {
            array_push($validate['errorMessage'] , "You forgot to enter a valid firstName");
            $validate['errorFlag'] = true;
        } 
        if (empty($this->lastName)) {
            array_push($validate['errorMessage'] , "You forgot to enter lastName");
            $validate['errorFlag'] = true;
        } elseif (!ctype_alpha($this->lastName)) {
            array_push($validate['errorMessage'] , "You forgot to enter a valid lastName");
            $validate['errorFlag'] = true;
        } 
        if (empty( $this->gender )) {
            array_push($validate['errorMessage'] , "select the gender");
            $validate['errorFlag'] = true;
        } 
        if (empty( $this->nationality )) {
            array_push($validate['errorMessage'] , "select the nationality");
            $validate['errorFlag'] = true;
        } 
        if (empty( $this->dob )) {
            array_push($validate['errorMessage'] , "enter the dob");
            $validate['errorFlag'] = true;
        } 
        if (empty( $this->designation )) {
            array_push($validate['errorMessage'] , "select the designation");
            $validate['errorFlag'] = true;
        } 
        if (empty( $this->office )) {
            array_push($validate['errorMessage'] , "select the office");
            $validate['errorFlag'] = true;
        } 
        if (empty( $this->address )) {
            array_push($validate['errorMessage'] , "enter your address");
            $validate['errorFlag'] = true;
        } 
        if (empty( $this->bloodgroup )) {
            array_push($validate['errorMessage'] , "select the bloodgroup");
            $validate['errorFlag'] = true;
        }
        
        return $validate;
    }
    public function addEmployee() 
    {
        $sql = "INSERT INTO employee(firstname,lastname,gender,
                DOB,nationality,address,bloodgroup,designation,office) 
                VALUES('$this->firstName','$this->lastName','$this->gender',
                '$this->dob','$this->nationality','$this->address',
                '$this->bloodgroup','$this->designation','$this->office')";
        if ($this->db->query($sql)) {
            header("Location:mainPage.php");
        } else {
              echo "<br>NO RECORDS ADDED";
        }           
    }
}
?>

    





 