<?php include('user.php');?>
<?php require_once("databaseConnect.php");?>
<?php require_once("validator.php")?>


<!DOCTYPE html>
<html>
<head>
<title>Gmail</title>

<!--  <script type="text/javascript" src="../js/registration.js"></script> -->
<!-- <script type="text/javascript" src="../js/common.js"></script> -->
<link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>
<body>
	<h1 align="center">Gmail</h1>
	<h2 align="center">signup</h2>
	<?php
if(!empty($_POST)){
require_once('function.php');
$errors = array();
$validatorObj = new validator($_POST);
$validatorObj->validate();
if($validatorObj->getIsValid()){
// create user object for OOP manipulation
$userObj = new User($_POST);
}
else{
$errors = $validatorObj->getErrors();
}
}
?>
<?php if(!empty($errors)):?>
<p> errors occured:please check</p>
<p class="error">
<?php
if(is_array($errors)):
foreach($errors as $val):
echo $val.'<br />';
endforeach;
endif;
?>
</p>
<?php elseif(!empty($saved) && $saved == true):?>
success!
<?php $_POST = array();?>
<?php endif;?>
                    <form action="signupPage_upload.php" method="POST">
                    <table align="center" cellpadding="10">
			        <td>First Name</td>
			        <td>
			        <input id="fname" name="firstName" value="<?php if(!empty($_POST['firstName'])):?><?php echo $_POST['firstName']?><?php else:?>please insert your first name<?php endif;?>"
				    title="enter your first name" type="text"
				    onblur="return username(id) " /></td>
			        </tr>
			        <tr>
				    <td>Last Name</td>
				    <td>
				    <input id="lname" name="lastName" value="<?php if(!empty($_POST['lastName'])):?><?php echo $_POST['lastName']?><?php else:?>please insert your last name<?php endif;?>"
					title="enter your last name" type="text"
					onblur="return username(id)" />
					</td>
			        </tr>
			        <tr>
				    <td>Date of Birth:</td>
				    <td>
				    <input type="number" name = "day" value = "<?php echo $day ?>" />
				    <input type="number" name = "month" value = "<?php echo $month ?>" /> 
				    <input type="number" name = "year" value = "<?php echo $year ?>"/>
					</td>
			        </tr>
			        <tr>
				    <td>Email Id</td>
				    <td>
				    <input id="email" name="email" value = "<?php if(!empty($_POST['email'])):?><?php echo $_POST['email']?><?php endif;?>" type="email"  maxlength="100"
					onblur="return checkEmptybox(id)" /></td>
			        </tr>
			        <tr>
				    <td>Password</td>
				    <td>
				    <input id="password" name="password" value="<?php if(!empty($_POST['password'])):?><?php echo $_POST['password']?><?php endif;?>"
					title="enter the pass word" type="password" maxlength="12"
					onblur="return checkEmptybox(id)"></td>
			       <tr>
			       <tr>
				   <td>confirmPassword</td>
				   <td>
				   <input id="confirmPassword" name="confirmPassword"
					value="<?php if(!empty($_POST['confirmPassword'])):?><?php echo $_POST['confirmPassword']?><?php endif;?>" title=" enter the pass
					word" type="password"
					maxlength="12" onblur="return checkEmptybox(id)"></td>
			       <tr>
				   <td>Mobile no</td>
				   <td>
				   <input id="form" title="enter your mobile number"
					value="<?php if(!empty($_POST['mobileNo'])):?><?php echo $_POST['mobileNo']?><?php endif;?>" type="text" name="mobileNo" maxlength="10"
					onblur="return checkEmptybox(id)" /> (10 digit number)</td>
			       </tr>
			       <tr>
				   <td>Gender</td>
				   <td>Male <input id="male" type="radio" name="gender" value="M"
					<?php if(@$gender=='male')echo 'checked="true"';?>
					<?php if(!isset($gender))echo 'checked="true"';?>
					onblur="return checkEmptybox(id)" /> Female <input id="female"
					type="radio" name="gender" value="F"
					<?php if(@$gender=='female')echo 'checked="true"';?>
					onblur="return checkEmptybox(id)" />
				   </td>
			       </tr>
                   <tr>
				   <td>Address <br />
				   <br />
				   <br /></td>
				   <td><textarea id="address" title="enter the address" name="address"
						rows="4" cols="30" onblur="return checkEmptybox(id)" /> </textarea></td>
			       </tr>
                   <tr>
				   <td>location</td>
				   <td><select id="loc" name="location">
						<option value="select location">location</option>
						<option value="chennai" >chennai</option>
						<option value="hyderabad" >hyderabad</option>
						<option value="mumbai" >mumbai</option>
						<option value="delhi" >delhi</option>
				   </td>
			       </tr>
                   <tr>
			       <td>Pin Code</td>
			       <td><input id="pin_no" value="<?php if(!empty($_POST['pincode'])):?><?php echo $_POST['pincode']?><?php endif;?>"
					title="enter your pin code" type="numb" name="pincode"
					maxlength="6" onblur="return checkEmptybox(id)" /> (6 digit number)
				   </td>
			       </tr>
                   <tr>
				   <td>State</td>
				   <td>
				   <input id="state" value="<?php echo $state ?>" title="enter your state"
					type="text" name="State" maxlength="30"
					onblur="return checkEmptybox(id)" /> (max 30 characters a-z and
					A-Z)</td>
			        </tr>
			        <tr>
				    <td>Country</td>
				    <td><select id="country" name="country">
						<option value="Australia">Australia</option>
						<option value="Bangladesh">Bangladesh</option>
						<option value="China">China</option>
						<option value="India">india</option></td>
			       </tr>
			       <tr>
				   <td colspan="2" align="center"><input type="submit" name="submit"
					value=" Check record" onclick="return registration_check() " /> 
					<input type="submit" name="submit" value="Submit"
					/*onclick="return registration_check() " */  />
					 <input type="reset" value="Reset"></td>
			       </tr>
          </table>
   </form>
  
</body>
</html>

