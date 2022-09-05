<?php
// session_start();
// include 'user.php';
// include 'testdb.php';
  

 class agriculturist extends user{
    
 
 
function __construct(){
  $this->db=database::getInstance();
   $this->user_info['user_type']="agriculturist";
 
  }


 

}


 



?>