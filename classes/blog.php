<?php


class blog
{
    public $db;
    public $table = "blog";
    function __construct()
    {
        $this->db = database::getInstance();
    }


    function addBlog($product_info)
    {
        print_r($product_info);

        if ($this->db->insert($this->table, $product_info)) {

            echo "product added to the system";
            return true;
        }
    }
    function viewAllBlogs()
    {



        $blog_list = array();
        $blog = array();
        $result = $this->db->fetch_all_data($this->table);


        if (count($result)) {
            $blog_list = array();
            foreach ($result as $r) {
                $sql = "SELECT name from user where user_id={$r['author']}";
                $stmnt = $this->db->connection->prepare($sql);
                $stmnt->execute();
                while ($row = $stmnt->fetch()) {
                    $blog["author"] = $row['name'];
                }

                $blog['title'] = $r['title'];
                $blog['category'] = $r['category'];


                $blog_list[] = $blog;
            }
        }


        include '../blog-details.php';
    }
}
