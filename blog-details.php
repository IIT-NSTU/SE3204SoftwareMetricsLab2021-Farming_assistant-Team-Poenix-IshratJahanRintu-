<?php include_once 'handlers/admin_header.php'
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

                <a href="admin_products.php"
                   class="
                   bttn">update</a>
                <a href="admin_products.php?delete=1"
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

<!-- show products  -->



<?php include 'handlers/footer.php' ?>