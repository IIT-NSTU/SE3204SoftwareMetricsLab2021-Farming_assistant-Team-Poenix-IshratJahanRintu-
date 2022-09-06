<?php include_once 'handlers/admin_header.php'
?>



<section class="show-products">
       <h1 class="heading text-center">কৃষিপণ্যসমূহ</h1>
       <div class="box-container">
              <?php
              if (isset($product_list)) {

                     if (count($product_list) > 0) {

                            foreach ($product_list as $product) {
              ?>


                                   <div class="box">
                                          <div class="product-box-content">
                                                 <img src="../assets/uploaded_img/<?php echo $product['product_img']; ?>" alt="">
                                                 <div class="name"><?php echo $product['name']; ?>
                                                        <span class="text-muted">(<?php echo $product['category']; ?>)</span>
                                                 </div>
                                                 <div class="price"><?php echo $product['quantity']; ?><span class="text-muted"><?php echo $product['quantity_type']; ?></span></div>
                                                 <div class="price"><?php echo $product['price']; ?></div>
                                                 <?php if ($_SESSION['user_type'] == 'admin') { ?>
                                                        <div class="price"><?php echo $product['seller']; ?></div> <?php } ?>
                                                 <a href="admin_products.php" class="
                   bttn">update</a>
                                                 <a href="admin_products.php?delete=1" class="dlt-btn" onclick="return confirm('delete this product?');">delete</a>
                                          </div>
                                   </div>

              <?php }
                     } else {

                            echo "No product to show";
                     }
              }
              ?>


       </div>


</section>
<section class="add-products">
       <form action="../handlers/productHandler.php" method="post" enctype="multipart/form-data">
              <h3 class="heading">পণ্য যোগ করুন</h3>
              <input type="text" name="name" class="box" placeholder="পণ্যের নাম দিন" required>
              <textarea name="description" class="box" placeholder="পণ্য সম্পর্কে বিস্তারিত লিখুন" required></textarea>
              <select name="category" id="" class="box" required>
                     <option value="" selected>পণ্যের ধরণ নির্ধারণ করুন</option>
                     <option value="সবজি">সবজি</option>
                     <option value="সবজি">সবজি</option>
                     <option value="সবজি">সবজি</option>
              </select>
              <select name="quantity_type" id="" class="box" required>
                     <option value="" selected>পণ্যের একক নির্ধারণ করুন</option>
                     <option value="কেজি">কেজি</option>
                     <option value="টি">টি</option>

              </select>

              <input type="number" min="1" name="quantity" class="box" placeholder="পণ্যের পরিমাণ লিখুন" required>

              <input type="number" min="1" name="unit_price" class="box" placeholder=" প্রতি এককে মূল্য লিখুন" required>


              <input type="file" name="image" accept="image/jpg, image/jpeg, image/png" class="box" required>
              <input type="submit" value="add product" name="add_product" class="bttn">
       </form>

</section>

<!-- product CRUD section ends -->

<!-- show products  -->



<?php include 'handlers/footer.php' ?>