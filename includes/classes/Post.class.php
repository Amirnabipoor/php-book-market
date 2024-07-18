<?php
  require_once "Table.class.php" ;
  class Post extends Table {
      protected  $data = array(
          "id" => 0 ,
          "title" => "",
          "content" => "",
          "post_type" => 0,
          "user_id" => 0,
          "user_name" => "",
          "first_name" => "",
          "last_name" => "",
          "published" => 0,
          "allow_comments" => 0,
          "link" => "",
          "creation_time" => 0,
          "last_modify" => 0,
          "categories" => array()
      );

      public static function getAllPosts($posts_type = 1 , $published = true , $limit = 0 , $start = 0){
        $conn = self::connect();
        if($published){
            $condition = "AND published = 1" ;
        }
        else
            $condition = "" ;
        if($limit > 0)
            $limiter = "LIMIT $start , $limit" ;
        else
            $limiter = "" ;

        $query = ("SELECT posts.*  , user_name , first_name , last_name FROM posts,users WHERE posts.user_id = users.id AND post_type = $posts_type $condition  ORDER BY creation_time  DESC $limiter ");




        $result = $conn->query($query);
        if($result->num_rows){

            $posts = array() ;
            foreach ($result->fetch_all(MYSQLI_ASSOC) as $row) {

                if($cats =  Post_cats::getAllByPost_id($row["id"])){

                    foreach ($cats as $cat) {
                         $row["categories"][] = $cat->cat_id;
                    }
                }
                $posts[] = new Post($row);
            }
            $ret = $posts ;
        }
        else
            $ret = false ;
        self::disconnect($conn);
        return $ret ;

      }

      public static function getPostById ($id){
        $conn = self::connect();
        $query = ("SELECT posts.* , user_name , first_name , last_name FROM `posts` , `users` WHERE posts.user_id = users.id AND posts.id =  $id ");

        $result = $conn->query($query);
        if($result->num_rows){
            $row = $result->fetch_assoc() ;
            if($cats = Post_cats::getAllByPost_id($row["id"])){

                foreach ($cats as $cat) {
                        $row["categories"][] = $cat->cat_id ;
               }
            }
            $ret = new Post($row);
        }
        else
            $ret = false ;
        self::disconnect($conn);
        return $ret ;



          
      }
  }

