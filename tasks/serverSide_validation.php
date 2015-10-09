<?php
       class user{ 
             public function validate()
             

In above registration form we have following fields :
-Name
-Email
-Password
-Number

and we are going to validate few things :
-empty value
-input length
-numeric
-valid email


PHP Script
For validating above form the PHP code will be as follow and put this script just above HTML tag :

<?php

if(isset($_POST['btn-signup']))
{
 $uname = trim($_POST['uname']);
 $email = trim($_POST['email']);
 $upass = trim($_POST['pass']);
 $mno = trim($_POST['mno']);
 
 if(empty($uname))
 {
  $error = "enter your name !";
  $code = 1;
 }
 else if(!ctype_alpha($uname))
 {
  $error = "letters only !";
  $code = 1;
 }
 else if(empty($email))
 {
  $error = "enter your email !";
  $code = 2;
 }
 else if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email))
 {
  $error = "not valid email !";
  $code = 2;
 }
 else if(empty($mno))
 {
  $error = "Enter Mobile NO !";
  $code = 3;
 }
 else if(!is_numeric($mno))
 {
  $error = "Numbers only !";
  $code = 3;
 }
 else if(strlen($mno)!=10)
 {
  $error = "10 characters only !";
  $code = 3;
 }
 else if(empty($upass))
 {
  $error = "enter password !";
  $code = 4;
 }
 else if(strlen($upass) < 8 )
 {
  $error = "Minimum 8 characters !";
  $code = 4;
 }
 else
 {
  ?>
        <script>
        alert('success');
  document.location.href='index.php';
        </script>
        <?php
 }
}
?>
