<?php include('user.php');?>
<!DOCTYPE html>
 <html>
 	<head>  <title>Gmail</title>
		
 	        <script type="text/javascript" src="../js/registration.js"></script>
 	        <script type="text/javascript" src="../js/common.js"></script>         
            <link rel="stylesheet" type="text/css" href="../css/style.css"/>
           	<style>
           	input, textarea {font-size: 1em;}
			p.error {background: #ffd; color: red;}
			p.error:before {content: "Error: ";}
			p.success {background: #ffd; color: green;}
			p.success:before {content: "Success: ";}
				p.error, p.success {font-weight: bold;}
   </style>
   </head>
		<body>
			<h1 align="center">Gmail</h1>
                        <h2 align="center">signup</h2>
                     <?=$error?>                 
					<form action="signupPage_upload.php" method="POST" >
					
                    <table align="center" cellpadding = "10">
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
					<td>
				    <input id="fname" name="firstName" value="<?=@$firstName?>" title="enter your first name" type="text" 
				    onblur = "return username(id) " />
					</td>
					</tr>
 					<tr>
					<td>Last Name</td>
					<td>
				    <input id="lname" name="lastName" value="<?=@$lastNname?>"title="enter your last name" type="text" 
				    onblur = "return username(id)"/> 
			        </td>
					</tr>
 					<tr>
					<td>Date of Birth: </td>
					<td><input type="number" name="day" value="<?=@$day?>" size=2/>/
					<input type="number" name="month" value="<?=@$month?>" size=2/>/
					<input type="number" name="year" value="<?=@$year?>" size=4/> (DD/MM/YYYY)</td>
					</tr>
                                        <tr>
					                    <td> Email Id</td>
					                    <td>  <input id="email" name="email"  value="<?=@$email?> title="enter your email ID" type="email" 
					                    name="Email_id" maxlength="100" 
					                    onblur ="return checkEmptybox(id)"/></td>
					                    </tr>
                                        <tr>
                                        <td>Password</td>
                                        <td> <input id = "password" name ="password" value="<?=@$password?>"title="enter the pass word"
                                        type="password"         
                                        maxlength="12" onblur="return checkEmptybox(id)"></td>    
					                    <tr>
	                     				<tr>
                                        <td>re-Password</td>
                                        <td> <input  id = "confirm_password" name="confirmPassword" value="<?=@$confirm_password?> title="enter the pass word" 
                                        type="password"
                                        maxlength="12" onblur="return checkEmptybox(id)"></td>    
					                    <tr>
					                    <td>Mobile no</td>
					                    <td>
					                    <input id="form" title="enter your mobile number"  value="<?=@$mobileNo?>" type="text" 
					                    name="mobileNo" maxlength="10" 
					                    onblur = "return checkEmptybox(id)" />
					                    (10 digit number)
					                    </td>
					                    </tr>		 
					                    <tr>
					                    <td>Gender</td>
					                    <td>
						                    Male <input id="male" type="radio" name="gender" value="M"  
						                     <?php if(@$gender=='male')echo 'checked="true"';?>
						                    <?php if(!isset($gender))echo 'checked="true"';?>
						                     onblur = "return checkEmptybox(id)"/>
						                    Female <input id="female" type="radio" name="gender" value="F"
						                    <?php if(@$gender=='female')echo 'checked="true"';?>
						                     onblur = "return checkEmptybox(id)" />
					                    </td>
					                    </tr>
					                     
					
					                    <tr>
					                    <td>  Address <br /><br /><br /></td>
					                    <td> <textarea id="address" title="enter the address" name="address" rows="4" 
					                    cols="30"  onblur = "return checkEmptybox(id)"/> 
					                    </textarea></td>
					                    </tr>
					                     
					
					                    <tr>
					                    <td>location</td>
					                    <td>	
                                                <select id = "loc" name="location">
                                                <option value="select location">location</option>
                                                <option value="chennai"<?php selected(@$blood_group, chennai) ?>>chennai</option>
                                                <option value="hyderabad"<?php selected(@$blood_group, hyderabad) ?>>hyderabad</option>
                                                <option value="mumbai"<?php selected(@$blood_group, mumbai) ?>>mumbai</option>
                                                <option value="delhi"<?php selected(@$blood_group, delhi) ?>>delhi</option>
					
					                    </td>
					                    </tr>
					                     
					
					                    <tr>
					                    <td>Pin Code</td>
					                    <td><input id="pin_no"  title="enter your pin code"type="numb"
					                     name="pincode" maxlength="6"  onblur = "return checkEmptybox(id)"/>
					                    (6 digit number)
					                    </td>
					                    </tr>
					                     
					
					                    <tr>
					                    <td>State</td>
					                    <td><input id="state" title="enter your state" type="text" name="State" 
					                    maxlength="30"  onblur = "return checkEmptybox(id)"/>
					                    (max 30 characters a-z and A-Z)
					                    </td>
					                    </tr>
					                     
					
					                    <tr>
					                    <td>Country</td>
					                    <td>
                                              <select id = "country" name="country">
                                              <option value="Australia">Australia</option>
                                              <option value="Bangladesh">Bangladesh</option>
                                              <option value="China">China</option>
                                              <option value="India">india</option>
                                        </td>      
					                    </tr>
					                    <tr>
					                    <td colspan="2" align="center">
					                    
					                     <input type="submit" name = "submit"  value=" Check record"
					                     onclick="return registration_check() " />
					                     <input type="submit" name = "submit"  value="Submit"
					                     /*onclick="return registration_check() "*/  />
					                     
					                    <input type="reset" value="Reset">
					                    </td>
					                    </tr>

</table>

</form> 

</body>				
</html>

