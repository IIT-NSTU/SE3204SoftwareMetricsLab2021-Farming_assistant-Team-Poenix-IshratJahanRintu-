<?php
session_start();
include 'Database.php';
include 'converter.php';
include '../classes/product.php';


$p = new Product();
$p->viewAllproducts();



if (isset($_POST['add_product'])) {

    echo $product_info["name"] =  "'{$_POST['name']}'";
    echo $product_info["description"] =  "'{$_POST['description']}'";
    echo $product_info["category"] =  "'{$_POST['category']}'";
    echo $product_info["unit_price"] = $_POST['unit_price'];
    echo $product_info["product_img"] = "'{$_FILES['image']['name']}'";
    echo $product_info["quantity"] =  $_POST['quantity'];
    echo $product_info["quantity_type"] =  "'{$_POST['quantity_type']}'";
    echo $product_info["farmer_id"] =  $_SESSION['user_id'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = '../assets/uploaded_img/' . $_FILES['image']['name'];


    print_r($product_info);




    $p = new Product();
    if ($p->addProduct($product_info)) {
        move_uploaded_file($image_tmp_name, $image_folder);
    }
    // header("Location:http://localhost/spl_php/handlers/productHandler.php");
}
