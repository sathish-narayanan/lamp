<?php
$link = mysqli_connect("localhost", "root", "aspire@123", "sathish");
    if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
      }
$first_name = mysqli_real_escape_string($link, $_POST['firstname']);
$last_name = mysqli_real_escape_string($link, $_POST['lastname']);
$email_address = mysqli_real_escape_string($link, $_POST['email']);
$sql = "INSERT INTO person (first_name, last_name, email_address) VALUES ('$first_name', '$last_name', '$email_address')";
     echo $sql;
     if(mysqli_query($link, $sql)){
     echo "Records added successfully.";
     } else{
     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
      }
mysqli_close($link);

    ?>


