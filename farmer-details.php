<?php include_once 'handlers/admin_header.php'
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
                   class=" dlt-btn"
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





<!-- show products  -->



<?php include 'handlers/footer.php' ?>