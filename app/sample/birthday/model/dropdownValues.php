<?php
require_once '../model/Database.php';
require_once '../config/config.php';

$con = mysqli_connect("127.0.0.1","root","aspire@123","application");
$sql = "select * from bloodgroup";
$result = mysqli_query($con,$sql);
//loop the data
echo "<select name='disp'>";
echo "<option value='Select..'>Select...</option>";
while($row=mysqli_fetch_array($result))
{
  echo "<option>" . $row['bloodgroup'] . "</option>";
}
echo "</select>";?>
 