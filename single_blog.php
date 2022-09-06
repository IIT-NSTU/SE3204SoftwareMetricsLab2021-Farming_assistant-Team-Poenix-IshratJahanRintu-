<?php
include_once 'admin_header.php';
include_once 'Database.php';


if (isset($_GET['blog_id'])) {
    $blog["blog_id"] = $_GET['blog_id'];

    $db = database::getInstance();
    $sql = "SELECT * from blog where blog_id={$_GET['blog_id']}";
    $stmnt = $db->connection->prepare($sql);
    $stmnt->execute();
    while ($row = $stmnt->fetch()) {


        echo $blog["title"] = $row['title'];
        echo  $blog["blog_img"] = $row['blog_img'];
        $blog["description"] = $row['description'];
        $sql = "SELECT name from user where user_id={$row['author']}";
        $stmnt = $db->connection->prepare($sql);
        $stmnt->execute();
        while ($result = $stmnt->fetch()) {
            $blog["author"] = $result['name'];
        }
    }


?>
    <section class="blog-container" id="posts">

        <div class="posts-container">

            <div class="post">
                <img src="assets/uploaded_img/<?php echo $blog['blog_img']; ?>" alt="" class="image">

                <h3 class="title heading"><?php echo $blog["title"] ?></h3>
                <p class="text"><?php echo $blog["description"] ?></p>

                <div class="links">

                    <i class="far fa-user"></i>
                    <span style=" font-size: 10px; ">পোস্টদাতা <?php echo $blog["author"] ?></span>

                    <a href=" #" class="icon">
                        <i class="far fa-comment"></i>
                        <span>(45)</span>
                    </a>
                    <a href="#" class="icon">
                        <i class="far fa-share-square"></i>
                        <span>(29)</span>
                    </a>
                </div>
            </div>

    </section>





<?php
}
include_once 'footer.php'; ?>