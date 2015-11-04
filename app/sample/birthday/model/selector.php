<?php
class selector
{   public $sql_1;
    public function arrangeAscending() 
    {  
    $sql = "select * from employee order by firstname asc";
    return $sql; 
    }
    public function arrangeDescending() 
    {  
    $sql = "select * from employee order by firstname desc";
    return $sql; 
    }
    public function arrangeUpcoming() 
    {  
    $sql = "select * from employee order by DOB";
    return $sql; 
    }
    
}