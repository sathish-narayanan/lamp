<!DOCTYPE html>
<html>
<head>
	<title>Upload CSV</title>
</head>
<body >
<form action = "csvfile_connection.php" method = "post" enctype = "multipart/form-data">
<h1>Upload CSV file</h1>
<h4>Click on the browse button to upload csv file</h4>
	<input type = 'file' name = 'uploaded_file' id = 'file' accept = ".csv" /><input type = 'submit' value = 'Submit' onclick ="csvfile_connection.php" />	
</form>
</body>
</html>
