<?php
require_once '../model/Database.php';
require_once '../config/config.php';

$connection = new Database();
$sql = "select * from bloodgroup";
$result = $connection->query($sql);
//loop the data
echo "<select name='disp'>";
echo "<option value=''>Select...</option>";
while($row=mysqli_fetch_array($result))
{
  echo "<option value =".$row['bloodgroup']." >" . $row['bloodgroup'] . "</option>";
}
echo "</select>";?>
 