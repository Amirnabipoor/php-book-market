<?php
 require_once "Table.class.php" ;
 class Post_cats extends Table {
     protected $data = array(
         "id" => 0 ,
         "post_id" => 0 ,
         "cat_id" => 0
     );

     public static function getAllByPost_id($post_id){
        $conn = self::connect();
        $query = "SELECT * from posts_cats WHERE post_id = $post_id " ;
        $result = $conn->query($query);
        if($result->num_rows){
            $cats = array();
            foreach ($result->fetch_all(MYSQLI_ASSOC) as $row){
                array_push($cats,new Post_cats($row)) ;
            }
            $ret = $cats ;
        }
        else{
            $ret = false;
        }

        self::disconnect($conn);
        return $ret ;

     }


     public static function getAllByCat_id($cat_id, $childs = true){

         $conn = self::connect();
         $query = "SELECT * from posts_cats WHERE cat_id = $cat_id " ;
         if($childs){

             if($child_cats = Category::getCategoriesByParentId($cat_id)){

               
                 $child_ids = "(" ;
                 foreach ($child_cats as $child){
                     $child_ids .= $child->id . "," ;
                 }
                 $child_ids = substr($child_ids,0,strlen($child_ids) - 1 ) . ")" ;
                 $query = "SELECT * from posts_cats WHERE cat_id = $cat_id  OR cat_id IN $child_ids" ;

                 echo $query ;
             }

         }
         $result = $conn->query($query);
         if($result->num_rows){
             $cats = array();
             foreach ($result->fetch_all(MYSQLI_ASSOC) as $row){
                 array_push($cats,new Post_cats($row)) ;
             }
             $ret = $cats ;
         }
         else{
             $ret = false;
         }

         self::disconnect($conn);
         return $ret ;

     }
 }
