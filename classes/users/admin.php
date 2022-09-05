<?php

// include 'user.php';
// include 'testdb.php';
  

 class admin extends user{
    
 
 
function __construct(){
 $this->db=database::getInstance();
   $this->user_info['user_type']="admin";
 
  }


 

}


 



?>