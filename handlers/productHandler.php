<?php
session_start();

if (isset($_SESSION['user_type'])) {
    if ($_SESSION['user_type'] == "farmer") {
        include_once '../farmer_header.php';
    } else if ($_SESSION['user_type'] == "admin") {
        include_once '../admin_header.php';
    } else {
        header("location:localhost/spl_php/index.php");
    }
}

include 'Database.php';
include 'converter.php';
include '../classes/product.php';

$db = database::getInstance();

$p = new Product();


if (isset($_GET['delete_id'])) {
    $p->deleteProduct($_GET['delete_id']);
}


if (isset($_POST['update_product'])) {

    $update_p_id = $_POST['update_p_id'];
    $update_name = $_POST['update_name'];
    $update_description = $_POST['update_description'];
    $update_category = $_POST['update_category'];
    $update_quantity_type = $_POST['update_quantity_type'];
    $update_quantity = $_POST['update_quantity'];
    $update_unit_price = $_POST['update_unit_price'];
    $update_image = $_FILES['update_image']['name'];
    $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
    $update_image_folder = '../assets/uploaded_img/' . $update_image;
    $update_old_image = $_POST['update_old_image'];

    echo  $update_query =  "UPDATE product SET  name='$update_name',description='$update_description',
    category='$update_category',quantity_type='$update_quantity_type', quantity=$update_quantity,unit_price=$update_unit_price,
      product_img = '$update_image' WHERE product_id = $update_p_id";
    $stmnt = $db->connection->prepare($update_query);
    $stmnt->execute() or die("update query failed");
    move_uploaded_file($update_image_tmp_name, $update_folder);
    unlink('uploaded_img/' . $update_old_image);



    header('location:productHandler.php');
}

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



    if ($p->addProduct($product_info)) {
        move_uploaded_file($image_tmp_name, $image_folder);
    }
    // header("Location:http://localhost/spl_php/handlers/productHandler.php");
}


$product_list = $p->viewAllproducts();
include '../product-details.php';