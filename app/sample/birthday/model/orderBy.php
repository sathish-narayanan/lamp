<?php
class orderBy
{   public $sql;
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
    $sql = "select * from employee where DAYOFYEAR(DOB) - DAYOFYEAR(NOW()) BETWEEN 0 AND 14 ";
    return $sql; 
    }
    public function arrangeRandom() {
    $sql = "select * from employee";
    return $sql;    
    }
    
}


    