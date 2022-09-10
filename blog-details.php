<?php
include_once 'handlers/DatabaseEdited.php';

$db = EDatabase::getInstance();
?>



<section class="show-products">
    <h1 class="heading text-center">ব্লগসমূহ</h1>
    <div class="box-container">
        <?php
        if (isset($blog_list)) {

            if (count($blog_list) > 0) {

                foreach ($blog_list as $blog) {
        ?>


        <div class="box">
            <div class="product-box-content">

                <div class="name"><?php echo $blog['title']; ?>
                </div>
                <div class="price text-muted"><?php echo $blog['category']; ?></div>

                <div class="price"><span class="text-muted"> by </span><?php echo $blog['author']; ?></div><?php ?>

                <a href="blogHandler.php?update_id=<?php echo $blog['blog_id']; ?>"
                   class="
                   bttn">update</a>
                <a href="blogHandler.php?delete_id=<?php echo $blog['blog_id']; ?>"
                   class="dlt-btn"
                   onclick="return confirm('delete this product?');">delete</a>
            </div>
        </div>

        <?php }
            } else {

                echo "<h1 class='empty-heading'>No blog to show</h1>";
            }
        }
        ?>


    </div>


</section>

<?php if ($_SESSION['user_type'] == "agriculturist") { ?>
<section class="add-products">
    <form action="../handlers/blogHandler.php"
          method="post"
          enctype="multipart/form-data">
        <h3 class="heading">ব্লগ যোগ করুন</h3>
        <input type="text"
               name="name"
               class="box"
               placeholder="ব্লগের টাইটেল দিন"
               required>
        <textarea name="description"
                  class="box"
                  placeholder=" বিস্তারিত লিখুন"
                  required></textarea>
        <select name="category"
                id=""
                class="box"
                required>
            <option value=""
                    selected>পণ্যের ধরণ নির্ধারণ করুন</option>
            <option value="পোকামাকড়">পোকামাকড়</option>
            <option value="সেচ">সেচ</option>
            <option value="বীজ রোপণ">বীজ রোপণ</option>
        </select>








        <input type="file"
               name="image"
               accept="image/jpg, image/jpeg, image/png"
               class="box"
               required>
        <input type="submit"
               value="যোগ করুন"
               name="add_blog"
               class="bttn">
    </form>

</section>

<!-- product CRUD section ends -->

<?php }


if (isset($_GET['update_id'])) {
    $update_id = $_GET['update_id'];
    $update_query =  "SELECT * FROM blog WHERE blog_id = '$update_id'";
    $stmnt = $db->connection->prepare($update_query);
    $stmnt->execute();
    if ($stmnt->rowCount()) {
        while ($blog_update = $stmnt->fetch()) {
            echo $blog_update['blog_img'];
    ?>
<section class="edit-product-form">
    <form action=""
          method="post"
          enctype="multipart/form-data">
        <input type="hidden"
               name="update_b_id"
               value="<?php echo $blog_update['blog_id']; ?>">
        <input type="hidden"
               name="update_old_image"
               value="<?php echo $blog_update['blog_img']; ?>">
        <input type="text"
               name="update_name"
               class="box"
               placeholder="ক্যাটাগরির নাম দিন"
               required
               value="<?php echo $blog_update['title']; ?>"
               required>
        <textarea name="update_description"
                  class="box"
                  placeholder=" বিস্তারিত লিখুন"
                  required><?php echo $blog_update['description']; ?></textarea>
        <select name="update_category"
                id=""
                class="box"
                required>
            <option value=""
                    selected>পণ্যের ধরণ নির্ধারণ করুন</option>
            <option value="সবজি">সবজি</option>
            <option value="সবজি">সবজি</option>
            <option value="সবজি">সবজি</option>
        </select>
        <input type="file"
               name="update_image"
               accept="image/jpg, image/jpeg, image/png"
               class="box"
               required>
        <div id="btn-img-grp">
            <img src="../assets/uploaded_img/<?php echo $blog_update['blog_img']; ?>"
                 alt="">
            <div class="buttons-grp"> <input type="submit"
                       value="আপডেট করুন"
                       name="update_blog"
                       class="bttn">
                <input type="reset"
                       value="cancel"
                       id="close-category"
                       class="dlt-btn">
            </div>
        </div>
    </form>
    <?php
        }
    }
} else {
    echo '<script>document.querySelector(".edit-product-form").style.display = "none";</script>';
}
    ?>

</section>




<?php include 'handlers/footer.php' ?>