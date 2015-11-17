<?php

require_once '../model/Database.php';
require_once '../config/config.php';
require_once '../model/Employee.php';
require_once '../model/dropdownValues.php';


$id = $_GET['id'];/* getting id which is passed from mainPage and assigning to $id */
$connection = new Database();
$query = "SELECT * FROM employee WHERE emp_id = '$id'";
$result = $connection->query($query);
$row = mysqli_fetch_array($result)  
?>   
<!DOCTYPE html>
<html>
    <head>
        <title>Update</title>
            <script type = "text/javascript" src = "../../js/Validate.js"></script>
            <link rel = "stylesheet" type = "text/css" href = "../../css/update.css"/>
             <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>  
             <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>  
             <script>  $(document).ready(function() {$("#datepicker").datepicker({ maxDate: new Date,defaultDate: new Date("12/11/1990"),dateFormat: "yy/mm/dd" });});  
             </script>
            <h1 align = "center">Update Details</h1>
   </head>
   <body>
       <form method = "POST" action = "../model/updateEmployee.php"  >
           <input type = "hidden" name = "emp_id" value = "<?php echo "$id" ?>">
               <table align = "right" cellpadding = "10">
                   <tr>
                        <td>First name </td>
                        <td>
                            <input type = "text"  name = "firstName" placeholder = "Enter Firstname " id = "firstName" value = "<?php echo "{$row['firstname']}"; ?>" />
                            <div id = "firstNameError" ></div>
                        </td>
                   </tr>
                   <tr>
                       <td>Last name </td>
                       <td>
                           <input type = "text"  name = "lastName" placeholder = "Enter lastname " id = "lastName" value = "<?php echo "{$row['lastname']}"; ?>"  />
                           <div id = "lastNameError" ></div>
                       </td>
                   </tr>
                   <tr>
                       <td>Date of Birth:</td>
                       <td>
                           <input type = "date" placeholder = "Enter date of birth " name = "dob" id = "datepicker" value = "<?php echo "{$row['DOB']}"; ?>" />  
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
                        <td>Nationality:</td>
                        <td>
                            <?php nationality(); ?>  
                            <div id = "nationalityError"></div>
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
                        <td>Home address <br /><br /><br /></td>
                        <td>
                            <textarea id = "address" title = "enter the address" name = "address"
                            rows="4" cols = "30" value = "<?php echo "{$row['address']}"; ?>"  > </textarea>
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
                            <input type = "submit" name = "submit"  onclick = "return validate()" value = "Update" class = "button" >
                            &nbsp;&nbsp;&nbsp;
                            <input type = "reset" name = "Reset" value = "Reset" class = "reset">
                        </td>
                    </tr>
                </table>
       </form>
    </body>
</html>
