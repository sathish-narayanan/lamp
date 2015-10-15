<?php require_once 'loginUser.php';
require_once 'databaseConnect.php';
if(isset($_POST['submit'])){
$obj  = new loginPage();
$obj -> validate();
 }
?> 
<!DOCTYPE html>
<html>
<head>
<title>login page</title>
<script type="text/javascript" src="../js/login_validation.js"></script>
<link rel="stylesheet" type="text/css" href="../css/style.css"/>
</head>
<body>

<form name="login" action="loginPage.php" method="post" accept-charset="utf-8">
<table align="center" cellpadding = "10">
<tr>
<td>userName </td>
<td>
<input type="text"  name = "userName" id = "userName" onblur = "return login_validation(id)" <?php echo $userName?>/>
</td>
</tr>
<tr>
 <td>Email Id</td>
 <td>
 <input id="email" name="email"  type="email"  maxlength="100"
onblur="return checkEmptybox(id) <?php  echo $_POST['email']?>" /></td>
 </tr>
<tr>
<td>password</td>
<td>
<input type="password" name = "password" id = "password"  onblur="return checkEmptybox(id) <?php echo "$password"?>"/>
</td>
</tr>
<tr>
<td>confirmPassword</td>
<td>
<input type="password" name = "confirmPassword" id = "confirmPassword" onblur="return checkEmptybox(id) <?php echo "$confirmpassword"?>"/>
</td>
</tr>
<tr>
<td>Mobile no</td>
<td>
<input id="mob_no" title="enter your mobile number"
<?php  echo $_POST['mobileNo']?> type="text" name="mobileNo" maxlength="10"
onblur="return checkEmptybox(id)" /> (10 digit number)</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type = "submit" name = "submit" value = "submit" onclick="return login_validation() ">
<input type = "reset" value = "reset">
</td>
</tr>
</form>
</body>
</html>
