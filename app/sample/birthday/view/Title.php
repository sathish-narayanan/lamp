<?php
include_once '../model/orderBy.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" type = "text/css" href = "../../css/mainPage.css"/>
        <title>Birthday</title>
        <h1 align = "center">Employee Birthday Tracker</h1>
    </head>
    <body>
        <p align = "right"><a class = "add" href="Register.php"> ADD EMPLOYEE</a></p>
        <form method = "POST" action = "mainPage.php" >
            <select name = "select" class = "dropdown">
                <option value = "noOption">--select order option--</option>
                <option value = "upcomingBirthday" >Upcoming birthday</option>
                <option value = "arrangeAscending">Arrange by ascending</option>
                <option value = "arrangeDescending">Arrange by Descending</option>
            </select>
            <p><input type = "submit" class = "go" value = "go" name = "proceed" /></p>
        </form>
    </body>
</html>
