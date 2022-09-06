<?php

  

 class customer extends user{
    
 
 
function __construct(){
 $this->db=database::getInstance();
 $this->user_info['user_type']="customer";
 
  }

  

 

}