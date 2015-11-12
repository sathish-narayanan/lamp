<?php

require_once '../model/Database.php';
require_once '../config/config.php';
require_once '../model/Employee.php';

$id = $_GET['id'];/* getting id which is passed from mainPage and assigning to $id */
$connection = new Database();
$query = "SELECT * FROM employee WHERE emp_id = '$id'";
$result = $connection->query($query);
($row = mysqli_fetch_array($result))  
?>   
<!DOCTYPE html>
<html>
    <head>
        <title>Update</title>
            <script type = "text/javascript" src = "../../js/Validate.js"></script>
            <link rel = "stylesheet" type = "text/css" href = "../../css/update.css"/>
             <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>  
             <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>  
             <script>  $(document).ready(function() {    $("#datepicker").datepicker({ maxDate: new Date,dateFormat: "yy/mm/dd" });    $("#datepicker2").datepicker({ dateFormat: "dd/mm/yy" });  });  
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
                           <select class = "dropdown" name ="designation"  id = "designation" value = <?php echo "{$row['designation']}"; ?> >
                               <option>--select the designation--</option>
                               <option value = "Trainee">Trainee</option>
                               <option value = "Engineer">Engineer</option>
                               <option value = "TechnicalArchitect">Technical Architect</option>
                               <option value = "ProjectHead">Project Head</option>
                               <option value = "Juniorengineer">Junior Engineer</option>
                               <option value = "Seniorengineer">Senior Engineer</option>
                               <option value = "DeliveryManager">Delivery Engineer</option>
                               <option value = "ProjectLead"> Project Lead</option>
                               <option value = "ProjectManager">Project Manager</option>
                           </select>
                           <div id = "designationError"></div>
                       </td> 
                   </tr> 
                   <tr>
                        <td>Nationality:</td>
                        <td>
                            <select class = "dropdown" name = "nationality" id = "nationality">
                                <option> --select the nationality--</option>
                                <option value = "American">American</option>
                                <option value = "Australian">Australian</option>
                                <option value = "Bangladeshi">Bangladeshi</option>
                                <option value = "Brazilian">Brazilian</option>
                                <option value = "British">British</option>
                                <option value = "Chinese">Chinese</option>
                                <option value = "Colombian">Colombian</option>
                                <option value = "Indian">Indian</option>
                                <option value = "Indonesian">Indonesian</option>
                                <option value = "Southafrican">South African</option>
                                <option value = "Southkorean">South Korean</option>
                                <option value = "Spanish">Spanish</option>
                                <option value = "Srilankan">Sri Lankan</option>
                            </select>
                            <div id = "nationalityError"></div>
                        </td> 
                    </tr>   
                    <tr>
                        <td>Office</td>
                        <td>
                            <select class = "dropdown" name = "office" id = "office" value = "<?php echo "{$row['office']}"; ?>" >
                                <option>--select the office-- </option>
                                <option value = "Chennai">Chennai</option>
                                <option value = "Gurgoan">Gurgoan</option>
                                <option value = "Hyderabad">Hyderabad</option>
                                <option value = "USA">USA</option>          
                            </select>
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
                            <select class = "dropdown" name = "bloodgroup" id = "bloodgroup">
                                <option value = "">--select the bloodgroup--</option>
                                <option value = "A(Pos)">A(Pos)</option>
                                <option value = "A1(Pos)">A1(Pos)</option>
                                <option value = "A(Neg)">A(Neg)</option>
                                <option value = "A1(Neg)">A1(Neg)</option>
                                <option value = "B(Pos)">B(Pos)</option>
                                <option value = "B(Neg)">B(Neg)</option>
                                <option value = "B1(Pos)">B1(Pos)</option>
                                <option value = "B1(Neg)">B1(Neg)</option>
                                <option value = "AB(Pos)">AB(Pos)</option>
                                <option value = "AB(Neg)">AB(Neg)</option>
                                <option value = "O(Pos)">O(Pos)</option>
                                <option value = "O(Neg)">O(Neg)</option>
                                <option value = "unknown">Unknown</option>
                            </select>
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
<?php 

?>