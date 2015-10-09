<?php

$isUploaded = false;
$uploadDir = "Uploads/";
$uploadFile = $uploadDir .basename($_FILES['uploaded_file']['name']);
$splitName = explode(".", $uploadFile); 
$fileName = explode("/", $uploadFile);
$fileExt = end($splitName); 
 //echo "Split name".$fileExt;
$name = $fileName[1]."_". date("d-M-Y h:iA.").$fileExt;     
$link = mysqli_connect("127.0.0.1", "root", "aspire@123", "sathish");
//$filename="/home/aspire/Desktop/detail.csv";
    if (!$link) {
        
         echo mysqli_connect_errno() . PHP_EOL;
         echo mysqli_connect_error() . PHP_EOL;
         exit;
  }
$file = move_uploaded_file($_FILES['uploaded_file']['tmp_name'], "$uploadDir" . $name)) {
chmod ("$uploadDir/$name"  ,0777);
$isUploaded = true;
    if (($fp = fopen("$file", "r")) !== FALSE) {
    while(($row = fgetcsv($fp,"500",",")) != FALSE)
        {
         $sql = "INSERT INTO csv VALUES('" . implode("','",$row) . "')";
         if(!mysqli_query($link, $sql)){
        die('Error : '. mysqli_connect_error());
       }
}
}

fclose($fp);


mysqli_close($link);
?>
<html>
<?php 
if ($isUploaded === true) {
 ?>
 File Uploaded Successflly
 <?php }?>
</html>


