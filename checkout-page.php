<?php include_once 'admin_header.php';
?>
<div class="main-wrapper">
    <h1 class="heading">পণ্যের বিবরণ দেখে অর্ডার করুন</h1>
    <div class="checkout-container">
        <div class="product-div">
            <div class="product-div-left">
                <div class="img-container">
                    <img src="assets/images/sp3.jpg" alt="watch">
                </div>

            </div>
            <div class="product-div-right">
                <span class="product-name">(New) Analog Watch - For Men</span>


                <p class="product-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae animi ad minima veritatis dolore. Architecto facere dignissimos voluptate fugit ratione molestias quis quidem exercitationem voluptas.</p>

                <input type="number" min="1" name="quantity" placeholder="পণ্যের পরিমাণ লিখুন" id="order-quantity" required>
                <div class="btn-groups">
                    <span class="product-price" id="price">$ 50.25</span>
                    <input type="submit" class="bttn " value="অর্ডার করুন">
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'footer.php';
