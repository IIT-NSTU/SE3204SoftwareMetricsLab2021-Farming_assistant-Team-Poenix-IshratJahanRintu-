<?php
include 'Database.php';
include '../classes/users/user.php';
include '../classes/users/farmer.php';
include '../classes/users/admin.php';
include '../classes/users/customer.php';
include '../classes/users/agriculturist.php';
include 'UserFactory.php';
if (isset($_POST['phone']) && isset($_POST['login_password'])) {
    $login_info['phone_number'] = $_POST['phone'];
    $login_info['password'] = $_POST['login_password'];
    $login_info['user_type'] = $_POST['user_type'];



    $userFactory = new userFactory();
    $user = $userFactory->getUser($login_info['user_type']);
    $user->login($login_info);
}