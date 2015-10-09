<?php require_once("database.php");
//$isUploaded = false;
$uploadDir = "Uploads/";
$uploadFile = $uploadDir .basename($_FILES['uploaded_file']['name']);
$splitName = explode(".", $uploadFile); 
$fileName = explode("/", $uploadFile);
$fileExt = end($splitName); 
$name = $fileName[1]."_". date("d-M-Y h:iA.").$fileExt;     
//$filename="/home/aspire/Desktop/detail.csv";
//$file = move_uploaded_file($_FILES['uploaded_file']['tmp_name'], "Uploads/".$name);  
//$isUploaded = true;
if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], "$uploadFile" . $name)) {
      echo "<b> File is valid, and was sucessfully uploaded!!!</b>";
    } else {
      echo "<b>File upload failed!!</b>";
    }
    if (($fp = fopen("$name", "r")) !== FALSE) {
    while(($row = fgetcsv($fp,"500",",")) != FALSE){
         $sql = "INSERT INTO csv VALUES('" . implode("','",$row) . "')";
         } if(!mysqli_query($link,$sql)){
    echo "input is fail"; 
  }
   else{
   echo "input added";
    }  
fclose($fp);
}

?>


