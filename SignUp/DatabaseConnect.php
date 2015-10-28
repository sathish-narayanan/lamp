<?php
class DatabaseConnect {
	public $db = "";
	function __construct () {
	    $this->db = mysqli_connect(DB_IP,DB_USER,DB_PASSWORD,DB_NAME);
	}
    function query($sql) {
	    if (!$this->db) {
	 		echo mysqli_connect_errno().PHP_EOL;
	 		echo mysqli_connect_error().PHP_EOL;
	 	}
	 	else {
	 	$connect = mysqli_query($this->db, $sql);
	    }
	    return  $connect;
	 } 
}