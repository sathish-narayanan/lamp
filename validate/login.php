<?php
ini_set("displayerrors",1);
//require_once 'databaseConnect.php';


function __autoload($class_name) {
	include $class_name . '.php';
}
$obj = new LoginUser($_POST);

        if(isset($_POST['submit'])){
        	
	  $validate =   $obj -> validate();
}
$db = new databaseConnect();

?> 
<!DOCTYPE html>
<html>
    <head>
    <title>login page</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css"/>
     <h3 align = "center">loginpage</h3>
    
    </head>
    
      <body>
       <p> <?php if(isset($validate[errorFlag])== false)
       {
       	echo $validate['errorMessage'];
       }
       	?></p>
       	        <form method="POST" action="login.php"  onsubmit = "return check()" >
      
           <table align="center" cellpadding = "10">
               <tr>
                <td>userName </td>
                  <td>
                    <input type="text"  name = "userName" id = "userName" onblur = "return checkEmptybox(id)" />
                    
                    <div id = "userNameError" ></div>
                  </td>
              </tr>
              <tr>
               <td>Email Id</td>
                <td>
                 <input id = "email" name="email"  type="email"  onblur = "return checkEmptybox(id)"  />
                 <div id = "emailError"></div>
               </td>
             </tr>
              <tr>
               <td>password</td>
                 
                <td>
                 <input type="password" name = "password" id = "password"  onblur="return checkEmptybox(id)" />
                <div id = "passwordError"></div>
                </td>
              </tr>
              <tr>
               <td>confirmPassword</td>
                 <td>
                  <input type="password" name = "confirmPassword" id = "confirmPassword" onblur="return checkEmptybox(id)" />
                  <div id = "confirmPasswordError"></div>
                 </td>
             </tr>
             <tr>
              <td>Date of Birth:</td>
               <td>
                <input type="number" id = "day" name = "day" onblur="return checkEmptybox(id)" /><div id ="dayError"></div>
                <input type="number" id = "month"  name = "month" onblur="return checkEmptybox(id)" /> <div id ="monthError"></div>
                <input type="number" id = "year" name = "year" onblur="return checkEmptybox(id)"/><div id ="yearError"></div>
              </td>
           </tr>
           <tr>
            <td>Address <br /><br /><br />
            </td>
             <td>
              <textarea id="address" title="enter the address" name="address"
              rows="4" cols="30" onblur = "return checkEmptybox(id)" /> </textarea>
              <div id = "addressError"></div>
             </td>
          </tr>
          <tr>
           <td>Mobile no</td>
            <td>
             <input id="mob_no" title="enter your mobile number"
             type="text" name="mobileNo" maxlength="10" onblur="return checkEmptybox(id)" /> 
              <div id = "mobileNoError"></div>
            </td>
         </tr>
         <tr>
          <td colspan="2" align="center">
           <input type = "submit" name = "submit" onsubmit = "return check()" value = "submit " >
           <input type = "reset" value = "reset">
         </td>
        </tr>
        </table>
    </form>
  </body>
</html>
