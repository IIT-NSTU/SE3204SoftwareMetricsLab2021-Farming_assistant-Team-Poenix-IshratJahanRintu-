<?php
include_once '../classes/ExistingCheck.php';
include_once '../classes/category.php';

$info = ['category_name' => 'সজি', 'category_img' => 'vegetable.jpg'];

$visitor = new ExistingChecker();
$cat = new category();

$cat->checkExisting($visitor, $info);