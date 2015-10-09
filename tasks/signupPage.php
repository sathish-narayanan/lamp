<?php require_once("signupPage_upload.php");?>
<!DOCTYPE html>
 <html>
 	<head>  <title>Gmail</title>
		
 	        <script type="text/javascript" src="../../js/registration.js"></script>
 	        <script type="text/javascript" src="../../js/common.js"></script>         
            <link rel="stylesheet" type="text/css" href="../../css/style.css"/>
            <?php
            if(isset($error))
             {
            ?>
            input:focus
             {
              border:solid red 1px;
             } 
             <?php
             }
             ?>
   </head>
		<body>
			<h1 align="center">Gmail</h1>
                        <h2 align="center">signup</h2>
                                      
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
				    <input id="fname" name="firstName" title="enter your first name" type="text" 
				    onblur = "return username(id) " />
					</td>
					</tr>
 					<tr>
					<td>Last Name</td>
					<td>
				    <input id="lname" name="lastName" title="enter your last name" type="text" 
				    onblur = "return username(id)"/> 
			        </td>
					</tr>
 					<tr>
					<td>Date Of Birth</td>
 	                                    <td>
                                        <select id = "month" name="month" >
                                         <option value="na">Month</option>
                                         <option value="1">January</option>  
                                         <option value="2">February</option> 
                                         <option value="3">March</option>
                                         <option value="4">April</option>
                                         <option value="5">May</option>
                                         <option value="6">June</option>
                                         <option value="7">July</option>
                                         <option value="8">August</option>
					                     <option value="9">September</option>
				                         <option value="10">October</option>
				                         <option value="11">November</option>
					                     <option value="12">December</option>
					                     </select>

		                                <select id = "day" name="day">
		                                <option value="na">Day</option>
		                                <option value="1">1</option>
		                                <option value="2">2</option>
		                                <option value="3">3</option>
		                                <option value="4">4</option>
		                                <option value="5">5</option>
		                                <option value="6">6</option>
		                                <option value="7">7</option>
		                                <option value="8">8</option>
					                    <option value="9">9</option>
					                    <option value="10">10</option>
					                    <option value="11">11</option>
					                    <option value="12">12</option>
					                    <option value="13">13</option>
					                    <option value="14">14</option>
					                    <option value="15">15</option>
					                    <option value="16">16</option>
					                    <option value="17">17</option>
					                    <option value="18">18</option>
					                    <option value="19">19</option>
					                    <option value="20">20</option>
					                    <option value="21">21</option>
					                    <option value="22">22</option>
					                    <option value="23">23</option>
					                    <option value="24">24</option>
					                    <option value="25">25</option>
					                    <option value="26">26</option>
					                    <option value="27">27</option>
					                    <option value="28">28</option>
					                    <option value="29">29</option>
					                    <option value="30">30</option>
					                    <option value="31">31</option>
					                    </select>

					                    <select id = "year" name="year" >
					                    <option value="na">Year</option>
					                    <option value="2009">2009</option>
					                    <option value="2008">2008</option>
					                    <option value="2007">2007</option>
					                    <option value="2006">2006</option>
					                    <option value="2005">2005</option>
					                    <option value="2004">2004</option>
					                    <option value="2003">2003</option>
					                    <option value="2002">2002</option>
					                    <option value="2001">2001</option>
					                    <option value="2000">2000</option>
					                    <option value="1999">1999</option>
					                    <option value="1998">1998</option>
					                    <option value="1997">1997</option>
					                    <option value="1996">1996</option>
					                    <option value="1995">1995</option>
					                    <option value="1994">1994</option>
					                    <option value="1993">1993</option>
					                    <option value="1992">1992</option>
					                    <option value="1991">1991</option>
					                    <option value="1990">1990</option>
					                    </select>
                                        </td>
                                        </tr>
                                        <tr>
					                    <td> Email Id</td>
					                    <td>  <input id="email" name="email" title="enter your email ID"type="email" 
					                    name="Email_id" maxlength="100" 
					                    onblur ="return checkEmptybox(id)"/></td>
					                    </tr>
                                        <tr>
                                        <td>Password</td>
                                        <td> <input id = "password" name ="password" title="enter the pass word"
                                        type="password"         
                                        maxlength="12" onblur="return checkEmptybox(id)"></td>    
					                    <tr>
	                     				<tr>
                                        <td>re-Password</td>
                                        <td> <input  id = "confirm_password" name="confirmPassword"title="enter the pass word" 
                                        type="password"
                                        maxlength="12" onblur="return checkEmptybox(id)"></td>    
					                    <tr>
					                    <td>Mobile no</td>
					                    <td>
					                    <input id="form" title="enter your mobile number" type="text" 
					                    name="mobileNo" maxlength="10" 
					                    onblur = "return checkEmptybox(id)" />
					                    (10 digit number)
					                    </td>
					                    </tr>		 
					                    <tr>
					                    <td>Gender</td>
					                    <td>
						                    Male <input id="male" type="radio" name="gender" value="M"  
						                     onblur = "return checkEmptybox(id)"/>
						                    Female <input id="female" type="radio" name="gender" value="F"
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
                                                <option value="chennai">chennai</option>
                                                <option value="hyderabad">hyderabad</option>
                                                <option value="mumbai">mumbai</option>
                                                <option value="delhi">delhi</option>
					
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


