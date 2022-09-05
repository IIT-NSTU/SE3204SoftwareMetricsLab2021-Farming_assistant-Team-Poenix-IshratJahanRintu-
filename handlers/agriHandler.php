<?php
session_start();
include_once 'Database.php';
include_once '../classes/users/user.php';
include_once '../classes/users/agriculturist.php';






if (isset($_POST['add_agri'])) {
    echo "post ";

    echo $agri_info["name"] =  "'{$_POST['name']}'";
    echo $agri_info["phone_number"] =  "'{$_POST['phone']}'";
    echo $agri_info["address"] =  "'{$_POST['address']}'";
    echo $agri_info["user_type"] = "'agriculturist'";
    echo $agri_info['password'] = "'{$_POST['password']}'";
    print_r($agri_info);




    $a = new agriculturist();
    if ($a->signup($agri_info)) {
        echo "new agriculturist added";
    }
}

$a = new agriculturist();

$agri_list = $a->viewAllMembers();
if (($a->countMembers()) > 0) {
    include '../agri-details.php';
}