<?php

class category implements ExistingCheckable
{
    public $table = "category";
    public $db;



    public function checkExisting(ExistingChecker $ex, $category_info = array())
    {
        if ($ex->checkExistingCategory($category_info)) {
            echo "category existing";
        } else {
            echo "no existing found";
        }
    }
}