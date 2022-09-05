<?php
include_once 'Database.php';
include_once '../classes/users/user.php';
include_once '../classes/users/farmer.php';
include_once '../classes/users/admin.php';
include_once '../classes/users/customer.php';
include_once '../classes/users/agriculturist.php';
include_once 'UserFactory.php';
if (isset($_POST['phone']) && isset($_POST['login_password'])) {
    echo   $login_info['phone_number'] = $_POST['phone'];
    echo  $login_info['password'] = $_POST['login_password'];
    echo  $login_info['user_type'] = $_POST['user_type'];



    $userFactory = new userFactory();
    $user = $userFactory->getUser($login_info['user_type']);
    $user->login($login_info);
}