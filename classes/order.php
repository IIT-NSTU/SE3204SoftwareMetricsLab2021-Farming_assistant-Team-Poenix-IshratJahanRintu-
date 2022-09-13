<?php
//implements ExistingCheckable
class order
{

    public $table = "orders";
    public $db;
    function __construct()
    {
        $this->db = EDatabase::getInstance();
    }


    // public function checkExisting(ExistingChecker $ex, $category_info = array())
    // {
    //     if ($ex->checkExistingCategory($category_info)) {
    //         echo "category existing";
    //     } else {
    //         echo "no existing found";
    //     }
    // }





    public function deleteOrder($where)
    {

        $sql = "DELETE FROM $this->table WHERE order_id=$where";
        $statement = $this->db->connection->prepare($sql);
        $statement->execute();
        if ($statement->execute()) {

            return true;
        } else {

            return false;
        }
    }

    public function editOrder($edit_info = array())
    {
        echo  $update_query =  "UPDATE $this->table SET  is_recieved='{$edit_info["is_recieved"]}',is_delivered='{$edit_info["is_delivered"]}' WHERE order_id={$edit_info["order_id"]}";
        $stmnt = $this->db->connection->prepare($update_query);
        $stmnt->execute() or die("update query failed");

        header("location:orderHandler.php");
    }

    public function viewOrder()
    {

        $result = array();
        if ($_SESSION['user_type'] == 'farmer') {
            print_r($farmer_info["farmer_id"] = $_SESSION['user_id']);
            print_r($result = $this->db->fetch_data_with_one_column_check($farmer_info, $this->table, "farmer_id"));
        }
        if ($_SESSION['user_type'] == 'admin') {
            $result = $this->db->fetch_all_data($this->table);
        }

        return $result;
    }
}