<?php
include_once 'Database.php';
include_once 'admin_header.php';
include_once '../classes/users/user.php';
include_once '../classes/users/farmer.php';
include_once '../classes/users/customer.php';
include_once '../classes/users/agriculturist.php';
include_once '../classes/users/admin.php';

$farmer = new farmer();
$admin = new admin();
$customer = new customer();
$agri = new agriculturist();

echo $total_farmers = $farmer->countMembers();
echo $total_customers = $customer->countMembers();
echo $total_admin = $admin->countMembers();
echo $total_agri = $agri->countMembers();





?>

<section class="dashboard">

    <h1 class="heading text-center ">এডমিন প্যানেল</h1>

    <div class="box-container">

        <div class="box">

            <h3><?php echo $total_admin ?></h3>
            <div class='p-div'>
                <p>এডমিনের সংখ্যা</p>
            </div>

        </div>

        <div class="box">

            <h3><?php echo $total_farmers ?></h3>
            <div class='p-div'>
                <p>কৃষকের সংখ্যা</p>
            </div>
        </div>

        <div class="box">

            <h3><?php echo $total_customers ?></h3>
            <div class='p-div'>
                <p>ক্রেতার সংখ্যা</p>
            </div>
        </div>

        <div class="box">
            <h3><?php echo $total_agri ?></h3>
            <div class='p-div'>
                <p>কৃষিবিদের সংখ্যা</p>
            </div>
        </div>

        <div class="box">

            <h3><?php echo '0' ?></h3>
            <div class='p-div'>
                <p>মোট কৃষিপণ্য</p>
            </div>
        </div>

        <div class="box">

            <h3><?php echo '0' ?></h3>
            <div class='p-div'>
                <p>মোট অর্ডার</p>
            </div>
        </div>

        <div class="box">

            <h3><?php echo '0' ?></h3>
            <div class='p-div'>
                <p>পেন্ডিং অর্ডার</p>
            </div>
        </div>

        <div class="box">

            <h3><?php echo '0' ?></h3>
            <div class='p-div'>
                <p>ব্লগের সংখ্যা
                </p>
            </div>





        </div>
    </div>

</section>
<?php include 'footer.php';
?>