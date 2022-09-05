<?php
session_start();
include_once 'Database.php';
include_once '../classes/users/user.php';
include_once '../classes/users/farmer.php';






if (isset($_POST['add_farmer'])) {


    $farmer_info["name"] =  "'{$_POST['name']}'";
    $farmer_info["phone_number"] =  "'{$_POST['phone']}'";
    $farmer_info["address"] =  "'{$_POST['address']}'";
    $farmer_info["user_type"] = "'farmer'";
    $farmer_info['password'] = "'{$_POST['password']}'";
    print_r($farmer_info);




    $a = new farmer();
    if ($a->signup($farmer_info)) {
        echo "new farmerculturist added";
    }
}

$a = new farmer();

$farmer_list = $a->viewAllMembers();
if (($a->countMembers()) > 0) {
    include '../farmer-details.php';
}