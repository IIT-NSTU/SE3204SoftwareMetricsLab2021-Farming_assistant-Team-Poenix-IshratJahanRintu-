<?php
session_start();



if (isset($_SESSION['user_type'])) {


    if ($_SESSION['user_type'] == "farmer") {
        include_once '../farmer_header.php';
    }
    if ($_SESSION['user_type'] == "admin") {
        include_once '../admin_header.php';
    }
    if ($_SESSION['user_type'] == "customer") {
        include_once '../customer_header.php';
    }
} else {
    header("location:../loginpage.php");
}

include_once 'DatabaseEdited.php';
include_once '../classes/order.php';
$order = new order();

if (isset($_POST['update_order'])) {

    echo $edit_info['is_recieved'] = $_POST['is_recieved'];
    echo $edit_info['is_delivered'] = $_POST['is_delivered'];
    echo  $edit_info['order_id'] = $_POST['order_id'];
    $order->editOrder($edit_info);
}


if (isset($_GET['delete_id'])) {
    $order->deleteOrder($_GET['delete_id']);
}


$order_list = $order->viewOrder();
include_once '../order-details.php';