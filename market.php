<?php
session_start();

include_once 'handlers/converter.php';

if (isset($_SESSION['user_type'])) {


    if ($_SESSION['user_type'] == "farmer") {
        include_once 'farmer_header.php';
    }
    if ($_SESSION['user_type'] == "admin") {
        include_once 'admin_header.php';
    }
    if ($_SESSION['user_type'] == "customer") {
        include_once 'customer_header.php';
    }

    if ($_SESSION['user_type'] == "agriculturist") {
        include_once 'agri_header.php';
    }
} else {
    include_once 'basic_header.php';
}
include_once 'Database.php';
include_once 'handlers/converter.php';
$db = database::getInstance();
?>

<!-- slider section start -->

<!-- home section starts  -->

<!-- home section starts  -->



<!-- home section ends -->
<section class="home"
         id="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <section class="swiper-slide slide"
                     style="background: url(assets/images/sp1.jpg) no-repeat">
                <div class="content">
                    <h3>কৃষিপণ্য কিনুন ঘরে বসেই</h3>
                    <a href="#"
                       class="bttn">শুরু করুন</a>
                </div>
            </section>
            <section class="swiper-slide slide"
                     style="background: url(assets/images/sp2.jpg) no-repeat">
                <div class="content">
                    <h3>কৃষিপণ্য কিনুন ঘরে বসেই</h3>
                    <a href="#"
                       class="bttn">শুরু করুন</a>
                </div>
            </section>
            <section class="swiper-slide slide"
                     style="background: url(assets/images/sp3.jpg) no-repeat">
                <div class="content">
                    <h3>কৃষিপণ্য কিনুন ঘরে বসেই</h3>
                    <a href="#"
                       class="bttn">শুরু করুন</a>
                </div>
            </section>


        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

<!-- home section ends -->


<!-- speciality section starts  -->



<section class="speciality"
         id="speciality">
    <h1 class="heading">ক্যাটাগরিসমূহ</h1>
    <!-- si -->
    <div class="box-container">
        <div class="box">
            <img class="image"
                 src="assets/images/sp3.jpg"
                 alt="" />
            <div class="content">
                <img src="images/s-1.png"
                     alt="" />
                <h3>চাল</h3>
                <p>

                </p>

            </div>
        </div>
        <!-- single  -->
        <div class="box">
            <img class="image"
                 src="assets/images/sp3.jpg"
                 alt="" />
            <div class="content">
                <img src="images/s-2.png"
                     alt="" />
                <h3>ডাল</h3>
                <p>

                </p>
            </div>
        </div>

        <!-- single  -->
        <div class="box">
            <img class="image"
                 src="assets/images/sp3.jpg"
                 alt="" />
            <div class="content">
                <img src="images/s-2.png"
                     alt="" />
                <h3>সবজি</h3>
                <p>

                </p>
            </div>
        </div>
        <!-- single  -->
        <div class="box">
            <img class="image"
                 src="assets/images/sp3.jpg"
                 alt="" />
            <div class="content">
                <img src="images/s-2.png"
                     alt="" />
                <h3>শাক</h3>
                <p>

                </p>
            </div>
        </div>
        <!-- single  -->


    </div>
</section>


<!-- speciality section ends -->

<!-- popular section starts  -->

<section class="popular"
         id="popular">
    <h1 class="heading"> <span>পন্য</span> সমূহ</h1>

    <div class="box-container">

        <?php
        $sql = "SELECT * from product ORDER BY product_id ";
        $statement = $db->connection->prepare($sql);
        $statement->execute();
        if ($statement->rowCount()) {
            while ($product = $statement->fetch()) {

                if ($product['quantity'] > 0) {

        ?>
        <div class="box">
            <span class="price"><?php echo converter::en2bn($product['quantity'] * $product['unit_price']) ?> টাকা
            </span>
            <img src="assets/uploaded_img/product/<?php echo $product['product_img']; ?>"
                 alt="">
            <h3><?php echo $product['name']; ?></h3>

            <p class="text-muted info"><span
                      class="quantity"><?php echo converter::en2bn($product['quantity']); ?></span><span
                      class="quantity type"><?php echo $product['quantity_type']; ?></span></p>

            <a href="checkout-page.php?product_id=<?php echo $product['product_id'] ?>"
               class="bttn"> অর্ডার করুন</a>
        </div>
        <?php }
            }
        } else {

            echo "<h1 class='empty-heading'>কোন পণ্য নেই </h1>";
        }


        ?>


    </div>
</section>

<!-- popular section ends -->



<!--Product
    section
    start
    -->





<?php include 'footer.php';
?>