<?php include_once 'admin_header.php';
include_once 'Database.php';
include_once 'handlers/converter.php';
$db = database::getInstance();

if (isset($_GET['product_id'])) {
    $sql = "SELECT * from product where product_id={$_GET['product_id']}";
    $stmnt = $db->connection->prepare($sql);
    $stmnt->execute();
    while ($row = $stmnt->fetch()) {


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
                    <img src="assets/uploaded_img/<?php echo $product['product_img']; ?>"
                         alt="কৃষিপণ্য">
                </div>

            </div>
            <div class="product-div-right">
                <span class="product-name"><?php echo $product['name']; ?></span>


                <p class="product-description"><?php echo $product['description']; ?></p>

                <input type="number"
                       min="1"
                       max="<?php echo $product['quantity']; ?>"
                       name="quantity"
                       placeholder="পণ্যের পরিমাণ লিখুন"
                       id="order-quantity"
                       required>
                <div class="btn-groups">
                    <span class="product-price"
                          id="price"><?php echo $product['unit_price']; ?></span>
                    <input type="submit"
                           class="bttn "
                           value="অর্ডার করুন">
                </div>
            </div>
        </div>
    </div>
</div>

<?php
}
include_once 'footer.php'; ?>