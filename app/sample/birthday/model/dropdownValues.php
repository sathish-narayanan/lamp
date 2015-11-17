<?php
require_once '../model/Database.php';
require_once '../config/config.php';



function bloodgroup() 
{
    $connection = new Database();
    $query = "select * from bloodgroup";
    $result = $connection->query($query);
    echo "<select name='bloodgroup' id ='bloodgroup'>";
    echo "<option value = ''>Select the bloodgroup</option>";
    while ($row=mysqli_fetch_array($result)) {
        echo "<option value = " . $row['bloodgroup'] . ">" . $row['bloodgroup'] . "</option>";
    }
    echo "</select>";       
}
function designation() 
{
    $connection = new Database();
    $query = "select * from designation";
    $result = $connection->query($query);
    echo "<select name = 'designation' id ='designation'>";
    echo "<option value = ''>Select the designation</option>";
    while ($row=mysqli_fetch_array($result)) {
        echo "<option value = " . $row['designation'] . ">" . $row['designation'] . "</option>";
    }
    echo "</select>";
}
function office() 
{
    $connection = new Database();
    $query = "select * from office";
    $result = $connection->query($query);
    echo "<select name = 'office' id ='office' selected = 'selected'>";
    echo "<option value = ''>Select the office</option>";
    while ($row=mysqli_fetch_array($result)) {
        echo "<option value = " . $row['office'] . ">" . $row['office'] . "</option>";
    }
    echo "</select>";
}
function nationality() 
{
    $connection = new Database();
    $query = "select * from nationality";
    $result = $connection->query($query);
    echo "<select name = 'nationality' id ='nationality'  selected='selected'>";
    echo "<option value = ''>Select the nationality</option>";
    while ($row=mysqli_fetch_array($result)) {
        echo "<option value = " . $row['nationality'] . ">" . $row['nationality'] . "</option>";
    }
    echo "</select>";
}

 ?>