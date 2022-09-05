<?php
session_start();
include_once 'Database.php';
include_once '../classes/users/user.php';
include_once '../classes/users/customer.php';






if (isset($_POST['add_customer'])) {
    echo "post ";

    echo $customer_info["name"] =  "'{$_POST['name']}'";
    echo $customer_info["phone_number"] =  "'{$_POST['phone']}'";
    echo $customer_info["address"] =  "'{$_POST['address']}'";
    echo $customer_info["user_type"] = "'customer'";
    echo $customer_info['password'] = "'{$_POST['password']}'";
    print_r($customer_info);




    $a = new customer();
    if ($a->signup($customer_info)) {
        echo "new customerculturist added";
    }
}

$a = new customer();

$customer_list = $a->viewAllMembers();
if (($a->countMembers()) > 0) {
    include '../customer-details.php';
}