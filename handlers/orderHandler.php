<?php
session_start();
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
