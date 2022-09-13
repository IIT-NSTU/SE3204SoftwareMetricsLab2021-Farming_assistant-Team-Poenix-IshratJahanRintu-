<?php

class user
{
  public $table = "user";
  public $user_info;
  public $db;
  function __construct()
  {


    $this->db = database::getInstance();
  }



  public function login($login_info)
  {
    $found_row = $this->db->fetch_data_with_two_column_check($login_info, $this->table, "phone_number", "password");

    if (count($found_row) > 0) {
      echo "login successfull";
      echo  $_SESSION['user_id'] = $found_row[0]['user_id'];
      echo $_SESSION['user_type']
        = $found_row[0]['user_type'];
      // header("location:../index.php");
    } else {
      header("location:../loginpage.php");
    }
  }
  public function deleteUser($where = null)
  {

    $sql = "DELETE FROM $this->table WHERE user_id=$where";
    $statement = $this->db->connection->prepare($sql);
    $statement->execute();
    if ($statement->execute()) {

      $sql = "DELETE FROM product WHERE farmer_id=$where";
      $product_delete = $this->db->connection->prepare($sql);
      $product_delete->execute();
      if ($product_delete->execute()) {
        echo "farm product also deleted";
        return true;
      }
    } else {

      return false;
    }
  }

  public function signup($signup_info)
  {
    if ($this->memberExist($signup_info['phone_number'])) {
      echo "member already exists with this phone number";
    } else {
      $this->db->insert($this->table, $signup_info);
      header("Location:loginpage.php");
      echo "user added to the system";
    }
  }

  public function memberExist($phone_number)
  {
    $row = array();
    echo $sql = "select * from $this->table Where phone_number=$phone_number";

    $statement = $this->db->connection->prepare($sql);
    $statement->execute();
    if ($statement->rowCount()) {
      $row = $statement->fetchAll();
      print_r($row);
      return true;
    } else {
      echo "no data found";
      return false;
    }
  }
  public function viewAllMembers()
  {


    $members = $this->db->fetch_data_with_one_column_check($this->user_info, $this->table, "user_type");
    return $members;
  }

  public function countMembers()
  {
    return (count($this->viewAllMembers()));
  }
}