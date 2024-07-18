<?php

require_once "Table.class.php" ;
class Comment extends Table{
    protected $data = array(
        "id" => 0 ,
        "full_name" => "" ,
        "email" => "" ,
        "website" => "" ,
        "comment" => "" ,
        "comment_time" => 0 ,
        "user_ip" => "",
        "post_id" => 0 ,
        "parent_id" => 0 ,
    );

    public static function getAllComments(){

        $conn = self::connect();
        $query = "SELECT * FROM `comments` ORDER BY `comment_time` DESC " ;
        $result = $conn->query($query);
        if($result->num_rows){
            $comments = [] ;
            $rows = $result->fetch_all(MYSQLI_ASSOC);
            foreach ($rows as $row) {
                $comments[] = new Comment($row);
            }
            $ret = $comments ;
        }else
            $ret = false ;
            self::disconnect($conn);
            return $ret ;

    }

    public static function getCommentsByPost_id($post_id,$parent_id = 0 ){
        $conn = self::connect();
        $query = "SELECT * FROM comments WHERE `post_id` = $post_id AND parent_id = $parent_id  ORDER BY `comment_time` ASC " ;

        $result = $conn->query($query);
//        $query2 = "SELECT * FROM comments WHERE `post_id` = $post_id  AND parent_id = $parent_id ORDER BY `comment_time` ASC " ;
        if($result->num_rows){
            $comments = array();
            foreach ($result->fetch_all(MYSQLI_ASSOC) as $row) {
                $comments[] = new Comment($row);
                $id = $row["id"];
                $conn2 = self::connect();

                $result2 = $conn2->query($query);





                if($result2->num_rows){


                    $x = Comment::getCommentsByPost_id($post_id,$id);

                    var_dump($x);
                    $comments = array_merge($comments,$x);


                    var_dump($comments);



                }



            }

            $ret = $comments ;

        }
        else
            $ret = false ;
            self::disconnect($conn);
            return $ret ;
    }

    public static function  getCommentById($id){
        $conn = self::connect();
        $query = ("SELECT * FROM `comments` WHERE `id` = $id ");

        $result = $conn->query($query);
        if($result->num_rows){
            $row = $result->fetch_assoc();
            $ret = new Comment($row);
        }
        else
            $ret = false ;
            self::disconnect($conn);
            return $ret ;

    }

    public static function insertComment($commentsArray){
      $ret = true ;
      $conn = self::connect();

      $full_name = $commentsArray['full_name'] ;
      $email = $commentsArray['email'] ;
      $website = $commentsArray['website'] ;
      $comment = $commentsArray['comment'] ;
      $post_id = $commentsArray['post_id'] ;
      $parent_id = $commentsArray['parent_id'] ;

      $user_ip = $_SERVER["REMOTE_ADDR"] ;
      $comment_time =  time();
      $query = ("INSERT INTO `comments` (full_name,email,website,comment,comment_time,user_ip,post_id,parent_id) VALUES ('$full_name','$email','$website','$comment',$comment_time,'$user_ip',$post_id,$parent_id)");

      if(!$conn->query($query)) $ret = false ;
      self::disconnect($conn);
      return $ret ;

    }

}
