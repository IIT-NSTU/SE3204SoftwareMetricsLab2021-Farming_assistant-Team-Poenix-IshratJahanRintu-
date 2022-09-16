<?php

require_once 'Database.php';
session_start();

$data=[
    'problem_id'=>$_GET['problem_id'],
    'solution_des'=>$_POST['solution_des'],
    'user_id'=>$_SESSION['user_id']
];


$db=Database::getInstance();

$db->insert('solution',$data);

header('location: solution.php?problem_id='.$_GET['problem_id']);