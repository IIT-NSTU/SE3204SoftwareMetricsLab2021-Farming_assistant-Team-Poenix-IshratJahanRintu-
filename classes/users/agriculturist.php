<?php


 class agriculturist extends user{
    
 
 
function __construct(){
  $this->db=database::getInstance();
   $this->user_info['user_type']="agriculturist";
 
  }


 

}