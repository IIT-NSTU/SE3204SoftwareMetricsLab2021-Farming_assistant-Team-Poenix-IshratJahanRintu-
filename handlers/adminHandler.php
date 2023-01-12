<?php
session_start();
include_once '../admin_header.php';
include_once 'DatabaseEdited.php';
include_once 'Database.php';
include_once '../classes/users/user.php';
include_once '../classes/users/admin.php';






if (isset($_POST['add_admin'])) {
    echo "post ";

    $admin_info["name"] =  $_POST['name'];
    $admin_info["phone_number"] =  $_POST['phone'];
    $admin_info["address"] =  $_POST['address'];
    $admin_info["user_type"] = 'admin';
    $admin_info['password'] = $_POST['password'];





    $a = new admin();
    if ($a->signup($admin_info)) {
        echo "new adminculturist added";
    }
}

$a = new admin();

$admin_list = $a->viewAllMembers();
if (($a->countMembers()) > 0) {
    include '../admin-details.php';
}