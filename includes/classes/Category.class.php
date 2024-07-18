<?php
require_once "Table.class.php" ;
class Category extends Table {
    protected $data  = array(
        "id" => 0 ,
        "category_name" => "",
        "parent_id" => 0
    );

    public static function getAllCategories(){
         $conn = self::connect();
         $query = "SELECT * FROM categories ORDER BY id " ;
         $result = $conn->query($query);

         if($result->num_rows){
             $cats = array() ;
             $rows = $result->fetch_all(MYSQLI_ASSOC);
             foreach ($rows as $row){
                 array_push($cats,new Category($row));
             }
             $ret = $cats ;
         }
         else
             $ret = false ;
             self::disconnect($conn);
             return $ret ;

    }

    public static function getCategoryById($id){
        $conn = self::connect();
        $query = "SELECT * FROM `categories` WHERE `id` = $id ";
        $result = $conn->query($query);
        if($result->num_rows){
            $ret = new Category($result->fetch_assoc());
        }else
            $ret = false ;
            self::disconnect($conn);
            return $ret ;

    }

    public static function getCategoriesByParentId($parentId){
        $conn = self::connect();
        $query = "SELECT * FROM `categories` WHERE `parent_id` = $parentId ORDER BY `id` DESC ";
        $result = $conn->query($query);
        if($result->num_rows){
            $cats = array();
            $rows = $result->fetch_all(MYSQLI_ASSOC);
            foreach ($rows as $row) {
                $cats[] = new Category($row);
            }
            $ret = $cats ;
        }
        else
            $ret = false ;
            self::disconnect($conn);
            return $ret ;

    }
}



