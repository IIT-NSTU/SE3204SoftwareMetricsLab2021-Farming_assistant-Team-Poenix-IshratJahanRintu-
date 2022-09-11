<?php include_once 'admin_header.php';
include_once 'Database.php';
include_once 'handlers/converter.php';
$db = database::getInstance();

if (isset($_GET['product_id'])) {
    $product['product_id'] = $_GET['product_id'];
    $sql = "SELECT * from product where product_id={$_GET['product_id']}";
    $stmnt = $db->connection->prepare($sql);
    $stmnt->execute();
    while ($row = $stmnt->fetch()) {

        $product['farmer_id'] = $row['farmer_id'];
        echo $product["name"] = $row['name'];
        echo  $product["product_img"] = $row['product_img'];
        $product["description"] = $row['description'];
        $product['unit_price'] = $row['unit_price'];
        $product['quantity'] = $row['quantity'];
        $sql = "SELECT name from user where user_id={$row['farmer_id']}";
        $statement = $db->connection->prepare($sql);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $product["seller"] = $result['name'];
        }
    }


?>
    <div class="main-wrapper">
        <h1 class="heading">পণ্যের বিবরণ দেখে অর্ডার করুন</h1>
        <div class="checkout-container">
            <div class="product-div">
                <div class="product-div-left">
                    <div class="img-container zoom-hover">
                        <img src="assets/uploaded_img/<?php echo $product['product_img']; ?>" alt="কৃষিপণ্য">
                    </div>

                </div>
                <div class="product-div-right">
                    <form action="handlers/checkoutHandler.php" method="post">
                        <span class="product-name"><?php echo $product['name']; ?></span>


                        <p class="product-description"><?php echo $product['description']; ?></p>

                        <input type="number" min="1" max="<?php echo $product['quantity']; ?>" name="quantity" placeholder="পণ্যের পরিমাণ লিখুন" id="order-quantity" onchange="calculatePrice(
                           )" required>
                        <div class="btn-groups">
                            <span class="product-price" id="price"><?php echo $product['unit_price']; ?>টাকা</span>
                            <input type="hidden" value="<?php echo $product['unit_price']; ?>" name="unit_price">
                            <input type="hidden" value="<?php echo $product['product_id']; ?>" name="product_id">
                            <input type="hidden" value="<?php echo $product['farmer_id']; ?>" name="farmer_id">

                            <!-- <div><span id="bkash_no">০১৭৫৬০৯৯৬৩</span><span id="bkash-text">এই নাম্বারে উপরোল্লিখিত টাকা
                                বিকাশ করুন এবং নিম্নের
                                খালিঘরে ট্রান্সেকশন আইডি প্রদান করুন</span></div>
                        <input type="text"
                               name="trans-id"
                               placeholder="ট্রান্সেকশন আইডি লিখুন"
                               id="trans-id"
                               required> -->
                            <input type="submit" class="bttn " value="পেমেন্ট করুন করুন" name="order">


                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        function calculatePrice() {
            let input = document.getElementById('order-quantity').value;
            document.getElementById('price').innerHTML = (input * <?php echo  $product['unit_price'];   ?>) + " টাকা";
        }
    </script>
<?php
}


include_once 'footer.php'; ?>