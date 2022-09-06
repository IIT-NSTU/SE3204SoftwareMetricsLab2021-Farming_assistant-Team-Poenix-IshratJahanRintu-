<?php
session_start();
include_once 'Database.php';
include_once '../classes/users/user.php';
include_once '../classes/users/farmer.php';


$a = new farmer();
$farmer_list = $a->viewAllMembers();
if (($a->countMembers()) > 0) {
    include '../farmer-details.php';
}