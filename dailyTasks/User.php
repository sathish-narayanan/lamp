<?php
class User{
// user entity properties: mapped to a DB table (`users` table, for our example)
private $firstName;
private $lastName;
private $email;
private $username;
private $password;
private $confirmPassword;
private $address;
private $mobileNo;
private $pincode;

public function __construct(array $input = array()){
if(empty($input) || !is_array($input)){
throw new Exception("Invalid data!");
}
foreach($input as $key=>$value){
$property = strpos($key, '_')?substr($key, 0, strpos($key, '_')).ucfirst(substr($key, strpos($key, '_')+1)):$key;
$method = 'set'.$property;
if(property_exists($this, $property) && method_exists($this, $method)){
$this->$method($value);
}
}
}
public function getFirstName(){
return $this->firstName;
}
public function getLastName(){
return $this->lastName;
}
public function getEmail(){
return $this->email;
}

public function getPassword(){
return $this->password;
}
public function getMobileNo(){
	return $this->password;
}
public function getPincode(){
	return $this->password;
}
public function getAddress(){
return $this->address;
}
public function setFirstName($firstName = ''){
$this->firstName = $firstName;
}
public function setLastName($lastName = ''){
$this->lastName = $lastName;
}
public function setEmail($email = ''){
$this->email = $email;
}
public function setPassword($password = ''){
$this->password = $password;
}
public function setmobileNo($mobileNo = ''){
	$this->password = $mobileNo;
}
public function setPincode($pincode = ''){
	$this->password = $password;
}
public function setAddress($address = ''){
$this->address = $address;
}
// general getter method
public function __get($name){
if(!empty($name) && in_array($name, get_class_vars($this))){
return $this->$name;
}
return false;
}
// general setter method
public function __set($name, $value){
if(!empty($name) && in_array($name, get_class_vars($this))){
$this->$name = $value;
}
}
public function getData(){
return array(
'firstName'=>$this->firstName,
'lastName'	=>$this->lastName,
'password'	=>$this->password,
'email'	=>$this->email,
'mobileNo' => $this->mobileNo,
'pincode' => $this->pincode,		
'address'	=>$this->address,
);
}
}
