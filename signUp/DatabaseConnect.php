<?php
class DatabaseConnect {
	 function database() {
	     $link = mysqli_connect(DB_IP,DB_USER,DB_PASSWORD,DB_NAME);
	 	     if (!$link) {
	 		     echo mysqli_connect_errno().PHP_EOL;
	 		     echo mysqli_connect_error().PHP_EOL;
	 	     }
	 }
	 function query($sql) {
	 	mysqli_query($this->link, $sql);
	 }
}