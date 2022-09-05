<?php

// include 'user.php';
// include 'testdb.php';
  

 class farmer extends user{
    
 
 
function __construct(){
 
  $this->user_info['user_type']="farmer";
  $this->db=database::getInstance();
 
  }
 

}





 



?>