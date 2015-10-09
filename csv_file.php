<?php
    $uploaddir = "/var/www/satish.com/public_html/Uploads/";
    $uploadfile = $uploaddir .basename($_FILES['uploaded_file']['name']);
    $splitName = explode(".", $uploadfile); 
     //echo "Split name".$splitName[0];
    $fileName = explode("/", $splitName[0]);
     //echo "File name".$fileName[1];
    $fileExt = end($splitName); 
      //echo "Split name".$fileExt;
    $name = $fileName[1]."_". date("d-M-Y h:iA.").$fileExt;
      //echo $name;
    echo "<pre style = \"font-size:20px\">";
    if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], "/var/www/satish.com/public_html/Uploads" . $name)) {
      chmod ("/var/www/satish.com/public_html/Uploads/$name",0777);
      echo "<b> File is valid, and was sucessfully uploaded!!!</b>";
    } else {
      echo "<b>File upload failed!!</b>";
    }
    echo "<br/>";
    echo "Upload: " .$_FILES["uploaded_file"]["name"]."<br/>";
    echo "Type: " .$_FILES["uploaded_file"]["type"]."<br/>";
    echo "Size: " .($_FILES["uploaded_file"]["size"]/1024)."Kb<br/>";
    echo "Temp file: " .$_FILES["uploaded_file"]["tmp_name"]."<br/>";
    echo "</pre>";
    $file = fopen("$uploadfile","r");
    $array = file("$uploadfile");
    foreach ($array as $key => $var) {
      $array[$key] = explode(';', $var);
    }
    echo '<table class = "design">';
    foreach ($array as $key => $value) {
      $i++;
      echo '<tr class = "data" align = "center">';
      echo '<td>'.$array[$key][0] . '</td>';
      echo '<td>'.$array[$key][1].'</td>';
      echo '<td>'.$array[$key][2].'</td>';
      echo '<td>'.$array[$key][3].'</td>';
      echo '<td>'.$array[$key][4].'</td>';
      echo '</tr>';
    }
    echo '</table>';
    fclose($file);
  ?><!doctype html>
<html>
<head>
  <title>Upload CSV</title>
  <link rel = "stylesheet" type = "text/css" href = "../CSV/csv.css"/>
</head>
<body>  
</body>
</html>

