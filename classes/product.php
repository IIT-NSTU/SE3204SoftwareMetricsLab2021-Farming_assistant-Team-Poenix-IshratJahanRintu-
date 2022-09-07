<?php


class Product
{
    public $db;
    public $table = "product";
    function __construct()
    {
        $this->db = database::getInstance();
    }


    function addProduct($product_info)
    {
        print_r($product_info);

        if ($this->db->insert($this->table, $product_info)) {

            echo "product added to the system";
            return true;
        }
    }


    public function deleteProduct($where)
    {

        $sql = "DELETE FROM $this->table WHERE product_id=$where";
        $statement = $this->db->connection->prepare($sql);
        $statement->execute();
        if ($statement->execute()) {

            return true;
        } else {

            return false;
        }
    }
    function viewAllproducts()
    {
        $product_list = array();
        $product = array();
        $result = array();
        if ($_SESSION['user_type'] == 'farmer') {
            print_r($farmer_info["farmer_id"] = $_SESSION['user_id']);
            print_r($result = $this->db->fetch_data_with_one_column_check($farmer_info, $this->table, "farmer_id"));
        }
        if ($_SESSION['user_type'] == 'admin') {
            $result = $this->db->fetch_all_data($this->table);
        }

        if (count($result)) {
            foreach ($result as $r) {
                $sql = "SELECT name from user where user_id={$r['farmer_id']}";
                $stmnt = $this->db->connection->prepare($sql);
                $stmnt->execute();
                $product['seller'] = '';
                while ($row = $stmnt->fetch()) {
                    $product['seller'] = $row['name'];
                }
                $product['product_img'] = $r['product_img'];
                $product['name'] = $r['name'];
                $product['category'] = $r['category'];
                $product['quantity'] = converter::en2bn($r['quantity']);
                $product['quantity_type'] = $r['quantity_type'];
                $product['price'] = converter::en2bn($r['quantity'] * $r['unit_price']);
                $product['product_id'] = $r['product_id'];
                $product_list[] = $product;
            }
        }

        return $product_list;
    }
}