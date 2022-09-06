<?php include_once 'handlers/admin_header.php'
?>

<section class="show-products">
    <h1 class="heading text-center">ক্রেতাগণ</h1>
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
                   class="dlt-btn"
                   onclick="return confirm('delete this product?');">delete</a>

            </div>
        </div>

        <?php }
                     } else {

                            echo "<h1 class='empty-heading'></h1>";
                     }
              }
              ?>


    </div>


</section>

<?php include 'handlers/footer.php' ?>