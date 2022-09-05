<?php include_once 'admin_header.php'
?>

<section class="show-products">
    <h1 class="heading text-center">কৃষকগণ</h1>
    <div class="box-container">
        <?php
          if (isset($farmer_list)) {

               if (count($farmer_list) > 0) {

                    foreach ($farmer_list as $farmer) {
          ?>


        <div class="box "
             style="height: 200px ;">
            <div class="product-box-content">
                <div class="name"><?php echo $farmer['name']; ?>
                </div>
                <div class="price text-muted"><?php echo $farmer['phone_number']; ?></div>
                <div class="price text-muted"><?php echo $farmer['address']; ?></div>

                <a href="farmer_products.php"
                   class="
                   bttn">update</a>
                <a href="admin_products.php?delete=1"
                   class="delete-btn"
                   onclick="return confirm('delete this product?');">delete</a>

            </div>
        </div>

        <?php }
               } else {

                    echo "কোন কৃষক নেই";
               }
          }
          ?>


    </div>


</section>



</section>
<section class="add-products">
    <form id="access-form"
          action="farmerHandler.php"
          method="post"
          onsubmit="return validate_mbl_pass()">
        <h3 class="text-center heading">নতুন কৃষক যোগ করুন</h3>
        <input type="text"
               name="name"
               class="box"
               placeholder=" নাম লিখুন"
               required>
        <input type="text"
               name="phone"
               id="phone"
               placeholder="ফোন নাম্বার"
               class="box"
               required>
        <input type="text"
               name="address"
               class="box"
               placeholder="ঠিকানা লিখুন"
               required>
        <input type="password"
               name="password"
               id="pwd"
               placeholder="পাসওয়ার্ড"
               required
               class="box">
        <input type="password"
               name="r_password"
               id="c_pwd"
               placeholder="পুনরায় পাসওয়ার্ড দিন"
               class="box"
               required>


        <input type="submit"
               value="add_farmer"
               name="add_farmer"
               class="bttn">
    </form>

</section>

<!-- product CRUD section ends -->

<!-- show products  -->



<?php include 'footer.php' ?>