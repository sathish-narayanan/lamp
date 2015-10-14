<?php
class Validator{
protected $isValid = true; 
protected $errorMessages= array(); 
protected $data	= array(); 
public function __construct(array $input = array()){
if(empty($input) || !is_array($input)){
throw new Exception("Invalid data!");
}
$this->data = $input;
}

public function validate(){
if(empty($this->data['firstName'])){
$this->errorMessages['firstName'] = 'Please insert first name!';
}
if(!ctype_alnum($firstName)){
$this->errorMessages['firstName'] = 'Your first name must be a alpha numeric!!!';
}
if(empty($this->data['lastName'])){
	$this->errorMessages['lastName'] = 'Please insert last name!';
}
if(!ctype_alnum($lastName)){
	$this->errorMessages['lastName'] = 'Your last  name must be a alpha numeric!!!';
}
if(empty($this->data['email'])){
$this->errorMessages['email'] = 'Please insert your email address!';
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
$this->errorMessages['email'] = 'Please insert a valid email address!';
}
if(empty($this->data['password'])){
$this->errorMessages['password'] = 'Please insert your password!';
}else{
if($this->data['password'] != $this->data['confirmPassword']){
$this->errorMessages['password'] = 'Your passwords must match!';
}
}
if(empty($this->data['mobileNo'])){
	$this->errorMessages['mobileNo'] = 'Please insert mobile number!';
}
if (!ctype_digit($phone) OR strlen($phone) != 10) {
	$this->errormessage['mobileNo']= "Enter a valid phone number";
}
if(empty($this->data['pincode'])){
	$this->errorMessages['pincode'] = 'Please insert pincode!';
}
if (!ctype_digit($phone) OR strlen($phone) != 6) {
	$this->errormessage['pincode']= "Enter a valid pincode";
}
// address validation
if(empty($this->data['address'])){
$this->errorMessages['address'] = 'Please insert your address!';
}
if(!empty($this->errorMessages)){
$this->isValid = false;
}
}
// getter methods
public function getIsValid(){
return $this->isValid;
}
public function getErrors(){
return $this->errorMessages;
}
}