<?php include_once 'customer_header.php'
?>

<section class="show-products">
    <h1 class="heading text-center">অ্যাডমিনগণ</h1>
    <div class="box-container">
        <?php
          if (isset($customer_list)) {

               if (count($customer_list) > 0) {

                    foreach ($customer_list as $customer) {
          ?>


        <div class="box "
             style="height: 200px ;">
            <div class="product-box-content">
                <div class="name"><?php echo $customer['name']; ?>
                </div>
                <div class="price text-muted"><?php echo $customer['phone_number']; ?></div>
                <div class="price text-muted"><?php echo $customer['address']; ?></div>

                <a href="customer_products.php"
                   class="
                   bttn">update</a>
                <a href="admin_products.php?delete=1"
                   class="delete-btn"
                   onclick="return confirm('delete this product?');">delete</a>

            </div>
        </div>

        <?php }
               } else {

                    echo "No customer  to show";
               }
          }
          ?>


    </div>


</section>



</section>
<section class="add-products">
    <form id="access-form"
          action="customerHandler.php"
          method="post"
          onsubmit="return validate_mbl_pass()">
        <h3 class="text-center heading">নতুন অ্যাডমিন যোগ করুন</h3>
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
               value="add_customer"
               name="add_customer"
               class="bttn">
    </form>

</section>

<!-- product CRUD section ends -->

<!-- show products  -->



<?php include 'footer.php' ?>