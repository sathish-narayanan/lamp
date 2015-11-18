<?php
require_once '../config/config.php';
require_once '../controller/autoload.php';
require_once '../model/dropdownValues.php';

$emp_obj = new Employee($_POST);
if (isset($_POST['submit'])) { 
    $validate = $emp_obj -> validate(); 
    if ($validate['errorFlag'] == true) {
        $displayErrors = implode('<br>',$validate['errorMessage']);
        echo $displayErrors;
    } else {
          $emp_obj->addEmployee();
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
             <script type = "text/javascript" src = "../../js/Validate.js"></script>
            <link rel = "stylesheet" type = "text/css" 
            href = "../../css/register.css"/>
            <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>  
            <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>  
            <script>  $(document).ready(function() { $("#datepicker").datepicker({  maxDate: new Date("31/12/1997"),minDate: new Date("31/12/1965"),defaultDate: new Date("12/11/1985"),dateFormat: "yy/mm/dd" });});  </script>
            <h1 align = "right">Employee Details</h1>
    </head>
    <body>
        <form method = "POST" action = "">
            <table align = "right" cellpadding = "10" class = "table">
                <tr>
                    <td>First name </td>
                    <td>
                        <input type = "text"  name = "firstName" placeholder = "Enter Firstname " id = "firstName" >
                        <div id = "firstNameError" ></div>
                    </td>
                </tr>
                <tr>
                    <td>Last name </td>
                    <td>
                        <input type = "text"  name = "lastName" placeholder = "Enter Lastname"id = "lastName"  />
                        <div id = "lastNameError"></div>
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <input type = "radio" name = "gender" 
                        id = " genderM" value = "m">Male</input>
                        <div id = "gError"></div>
                        <input type = "radio" name = "gender" 
                        id = "genderF" value = "f">Female</input>
                        <div id = "gError"></div>
                    </td>
                </tr>
                <tr>
                    <td>Nationality:</td>
                    <td>
                        <?php nationality(); ?>  
                        <div id = "nationalityError"></div>
                    </td> 
                </tr>   
                <tr>
                    <td>Date of Birth:</td>
                    <td>
                        <input type = "text" 
                        name = "dob" placeholder = "Enter date of birth " id = "datepicker"/>  
                        <div id = "dobError"></div>
                    </td>
                </tr>
                <tr>
                    <td>Designation</td>
                    <td>
                        <?php designation(); ?> 
                        <div id = "designationError"></div>
                    </td> 
                </tr> 
                <tr>
                    <td>Office</td>
                    <td>
                        <?php office(); ?> 
                        <div id = "officeError"></div>
                    </td>
                </tr>        
                <tr>
                    <td>Home address</td>
                    <td>
                        <textarea id = "address" title = "enter the address"
                         name = "address" rows = "4" cols = "30" placeholder = "Enter your address " > </textarea>
                        <div id = "addressError"></div>
                    </td>
                </tr>
                <tr>
                    <td>Blood group</td>
                    <td>
                       <?php bloodgroup(); ?> 
                        <div id = "bloodgroupError"></div>
                    </td>
                </tr>       
                <tr>
                    <td colspan = "2" align = "center">
                        <input type = "submit" name = "submit" 
                        onclick = "return validate()" 
                        value = "Add" class = "button" >
                        &nbsp;&nbsp;&nbsp;
                        <input type = "reset" name = "Reset" 
                        value = "Reset" class = "reset">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
