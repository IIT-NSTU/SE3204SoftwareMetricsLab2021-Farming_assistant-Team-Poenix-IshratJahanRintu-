<?php
session_start();
include 'Database.php';
include 'converter.php';
include '../classes/blog.php';


$p = new blog();
$p->viewAllBlogs();



if (isset($_POST['add_blog'])) {

    echo $blog_info["title"] =  "'{$_POST['name']}'";
    echo $blog_info["description"] =  "'{$_POST['description']}'";
    echo $blog_info["category"] =  "'{$_POST['category']}'";

    $blog_info["blog_img"] = "'{$_FILES['image']['name']}'";

    echo $blog_info["author"] =  $_SESSION['user_id'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = '../assets/uploaded_img/' . $_FILES['image']['name'];


    print_r($blog_info);




    $p = new blog();
    if ($p->addBlog($blog_info)) {
        move_uploaded_file($image_tmp_name, $image_folder);
    }
}
