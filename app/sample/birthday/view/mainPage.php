<?php
require_once 'Title.php';
require_once '../model/Database.php';
require_once '../config/config.php';

?>
<!doctype html>
<html>
<body>
<div align = "center">
<?php
$order = "";
$query = "";
$connection = new Database(); /*object for Database class*/
$orderBy_obj = new OrderBy(); /*object for orderBy class*/
if (isset ($_POST['proceed'])) {
    $order =  $_POST['select'];
}
if ($order == "upcomingBirthday") {
    echo "Arranged by upcoming birthday";
    $query = $orderBy_obj->arrangeUpcoming();
}
if ($order == "arrangeAscending") {
    echo "Arranged by ascending order";
    $query = $orderBy_obj->arrangeAscending();
}
if ($order == "arrangeDescending") {
    echo "Arranged by descending order";
    $query = $orderBy_obj->arrangeDescending();
}
if ($order == "") {
    $query = $orderBy_obj->arrangeRandom();
}
if ($order == "noOption") {
    echo "No specific order selected";
    $query = $orderBy_obj->arrangeRandom();
}
$result = $connection->query($query);
if ($result) { 
    echo "<table border = 1><tr>
          <th class = 'th'>Employee Name&nbsp;&nbsp;&nbsp;&nbsp;</th>
          <th class = 'th'>Employee Designation&nbsp;&nbsp;&nbsp;&nbsp;</th>
          <th class = 'th'>Employee office &nbsp;&nbsp;&nbsp;&nbsp;</th>
          <th class = 'th'>DOB</th>
          <th colspan = '4' class = 'th'>Perform</th>
          </tr>"
    ?>
    <?php 
    while ($row = $result->fetch_assoc()) { 
        echo "<tr class = 'tr'>
        <td>".$row["firstname"]."</td><td>".$row["designation"]."</td><td> 
        ".$row["office"]."</td><td>".
        $row["DOB"]."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>" ; 
        echo "<td>" ."</td>"; echo '<td><a name = "update"  
        href= "updateEmployeePage.php?id='.$row['emp_id'].'">Update</a></td>'; 
        echo "<td>" ."</td>"; echo '<td><a name = "delete"  
        href= "deleteEmployee.php?id='.$row['emp_id'].'" 
        onclick = "return confirm(\'Are you sure want to delete?\');">
        Delete</a></td>'; 
    }
    echo "</table>";
} else {
    echo "0 results";
}

?> 
</div>
</body>
</html>
