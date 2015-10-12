<?php include('user.php');?>
<!DOCTYPE html>
<html>
<head>
<title>Gmail</title>

<script type="text/javascript" src="../js/registration.js"></script>
<script type="text/javascript" src="../js/common.js"></script>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>
<body>
	<h1 align="center">Gmail</h1>
	<h2 align="center">signup</h2>
                     <?=$error?>                 
					<form action="signupPage_upload.php" method="POST">

		<table align="center" cellpadding="10">
			<tr>
 					<?php
                    if(isset($error))
                         {
                         ?>
                        
			
			
			<tr>
				<td id="error"><?php echo $error; ?></td>
			</tr>
                        <?php
                         }
                         ?>
					<td>First Name</td>
			<td><input id="fname" name="firstName" value="<?=@$firstName?>"
				title="enter your first name" type="text"
				onblur="return username(id) " /></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td><input id="lname" name="lastName" value="<?=@$lastNname?>"
					title="enter your last name" type="text"
					onblur="return username(id)" /></td>
			</tr>
			<tr>
				<td>Date of Birth:</td>
				<td><input type="number" name="day" value="<?=@$day?>" size=2 />/ <input
					type="number" name="month" value="<?=@$month?>" size=2 />/ <input
					type="number" name="year" value="<?=@$year?>" size=4 />
					(DD/MM/YYYY)</td>
			</tr>
			<tr>
				<td>Email Id</td>
				<td><input id="email" name="email" value="<?=@$email?> title=" enter
					your email ID" type="email" name="Email_id" maxlength="100"
					onblur="return checkEmptybox(id)" /></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input id="password" name="password" value="<?=@$password?>"
					title="enter the pass word" type="password" maxlength="12"
					onblur="return checkEmptybox(id)"></td>
			
			
			<tr>
			
			
			<tr>
				<td>re-Password</td>
				<td><input id="confirm_password" name="confirmPassword"
					value="<?=@$confirm_password?> title=" enter the pass
					word" 
                                        type="password"
					maxlength="12" onblur="return checkEmptybox(id)"></td>
			
			
			<tr>
				<td>Mobile no</td>
				<td><input id="form" title="enter your mobile number"
					value="<?=@$mobileNo?>" type="text" name="mobileNo" maxlength="10"
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
						<option value="chennai" <?php selected(@$location, chennai) ?>>chennai</option>
						<option value="hyderabad" <?php selected(@$location, hyderabad) ?>>hyderabad</option>
						<option value="mumbai" <?php selected(@$location, mumbai) ?>>mumbai</option>
						<option value="delhi" <?php selected(@$location, delhi ) ?>>delhi</option></td>
			</tr>


			<tr>
				<td>Pin Code</td>
				<td><input id="pin_no" value="<?=@$pincode?>"
					title="enter your pin code" type="numb" name="pincode"
					maxlength="6" onblur="return checkEmptybox(id)" /> (6 digit number)
				</td>
			</tr>


			<tr>
				<td>State</td>
				<td><input id="state" value="<?=@$state?>" title="enter your state"
					type="text" name="State" maxlength="30"
					onblur="return checkEmptybox(id)" /> (max 30 characters a-z and
					A-Z)</td>
			</tr>


			<tr>
				<td>Country</td>
				<td><select id="country" name="country">
						<option value="Australia" <?php selected(@$country, Australia) ?>>Australia</option>
						<option value="Bangladesh"
							<?php selected(@$location, Bangladesh) ?>>Bangladesh</option>
						<option value="China" <?php selected(@$location, China) ?>>China</option>
						<option value="India" <?php selected(@$location, India) ?>>india</option></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit"
					value=" Check record" onclick="return registration_check() " /> <input
					type="submit" name="submit" value="Submit"
					/*onclick="return validate() " */  /> <input type="reset"
					value="Reset"></td>
			</tr>

		</table>

	</form>
	<?php
if (isset($_POST['submit']) && $error == '') { // if there is no error, then process further
echo "<p class='success'>Form has been submitted successfully.</p>"; // showing success message
}?>

</body>
</html>

