<?php
class Database {
	public $db = " ";
	function __construct () {
	    $this->db = mysqli_connect(DB_IP,DB_USER,DB_PASSWORD,DB_NAME);
	}
    function query($sql) {
        if ($this->db) {
            return mysqli_query($this->db, $sql);
	 	} else {
	 	      echo "error";	
	 	  }
	} 
}