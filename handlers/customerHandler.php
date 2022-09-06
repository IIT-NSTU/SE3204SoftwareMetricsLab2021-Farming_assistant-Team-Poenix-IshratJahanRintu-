<?php
session_start();
include_once 'Database.php';
include_once '../classes/users/user.php';
include_once '../classes/users/customer.php';


$a = new customer();
$customer_list = $a->viewAllMembers();
include '../customer-details.php';