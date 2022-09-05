<?php
session_start();
include_once 'Database.php';
include_once '../classes/users/user.php';
include_once '../classes/users/farmer.php';






if (isset($_POST['add_farmer'])) {
    echo "post ";

    echo $farmer_info["name"] =  "'{$_POST['name']}'";
    echo $farmer_info["phone_number"] =  "'{$_POST['phone']}'";
    echo $farmer_info["address"] =  "'{$_POST['address']}'";
    echo $farmer_info["user_type"] = "'farmer'";
    echo $farmer_info['password'] = "'{$_POST['password']}'";
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