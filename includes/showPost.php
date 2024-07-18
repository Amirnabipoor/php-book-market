<?php

if(isset($_POST["mySubmit"])){
    echo("Ok");
}

 if(isset($_POST["answerid"])){
     $commentsArray = array(
         "full_name" => $_POST["full_name"] ,
         "email" => $_POST["email"],
         "website" => $_POST["website"] ,
         "comment" =>$_POST["comment"],
         "post_id" => $_GET["post"] ,
         "parent_id" => $_POST["answerid"] ,
     );

     Comment::insertComment($commentsArray);
     showPost();
 }
 else{
     showPost();
 }

 function showPost(){
     $post_id = $_GET["post"];
     $post = Post::getPostById($post_id);

     $content = str_replace("--more--","",$post->content);

     ?>

     <article>
         <header class="postheader">
             <h2><a href="<?php echo "./post" . $post->id ; ?>"> <?php echo $post->title ; ?></a></h2>
             <p>

                 <?php
                 $creation = convertDate($post->creation_time);
                 echo "نوشته شده در " . $creation["day"] . " " . $creation["month_name"] . " " . $creation["year"] ;

                 echo "در ساعت " . $creation["hour"] . ":" . $creation["minute"] . "توسط " . $post->first_name ;
                 echo " " . $post->last_name . " در گروه " ;


                 foreach ($post->categories as $cat_id) {


                     $cat_name = Category::getCategoryById($cat_id)->category_name; ?>

                     <a href="./?cat=<?php echo $cat_id ;  ?>"><?php echo $cat_name ?></a>

                 <?php } ?>

             </p>

         </header>
         <div class="postbody">
            <?php echo $content ; ?>
            <?php
            if(!isset($_SESSION["user_name"]))

                $footer = '<span>برای مشاهده لینک ها باید عضو شوید. برای ثبت نام
<a href="./?action=signup">اینجا</a> و برای ورود <a href="./?action=login">اینجا</a> کلیک کنید. </span>' ;
            else
                $footer  = '<p>دانلود کنید <a href="'.$post->link.'">
                    <img src="./images/download.jpg" alt="">
</a></p>'
            ?>
         </div>

         <div id="download">

             <?php
               echo $footer ;
             ?>
         </div>
         <div class="postseperator"></div>
     </article>

     <div id="comments">

         <?php
           if($comments = Comment::getCommentsByPost_id($post_id)){
               foreach ($comments as $comment) {
                   if($comment->parent_id == 0){
                     $title = $comment->full_name . " گفته : " ;

                   }
                   else{

                       $other = Comment::getCommentById($comment->parent_id);

                       $title = $comment->full_name . " در پاسخ به " . $other->full_name . " گفته :" ;

                       $class = 'class="answer"' ;

                   }
                   $creation = convertDate($comment->comment_time);
                   $time =  "در " . $creation["day"] . " " . $creation["month_name"] . " " . $creation["year"] ;
                   $time .= " ساعت " . $creation["hour"] . ":" . $creation["minute"] ;

                   ?>


                   <article <?php echo  isset($class) ? $class : "" ?>>
                       <header>
                           <p><?php echo $title ; ?></p>
                           <time><?php echo $time ; ?></time>
                       </header>
                       <div class="commentbody">
                           <?php
                             echo  nl2br($comment->comment )  ;
                           ?>
                       </div>
                       <footer class="commentfooter">
                           <span onclick="changeAnswer(<?php echo $comment->id ; ; ?>,'<?php echo $comment->full_name ; ?>');">پاسخ دهید</span>
                       </footer>
                   </article>

           <?php    }  }?>


     </div>

     <?php if($post->allow_comments){  ?>


         <form method="post" id="sendcomment">
             <p id="commenttitle">
                 دیدگاه خود را در مورد این مطلب بنویسید.
             </p>
             <table>
                 <tr>
                     <td width="130">نام :</td>
                     <td>
                         <input type="text" name="full_name" class="inputright" required />
                     </td>
                 </tr>
                 <tr>
                     <td>ایمیل :</td>
                     <td>
                         <input type="email" name="email" class="inputleft" />
                     </td>
                 </tr>
                 <tr>
                     <td>وب سایت</td>
                     <td>
                         <input type="text" name="website" class="inputleft" />
                     </td>
                 </tr>
                 <tr>
                     <td>دیدگاه :</td>
                     <td>
                         <textarea name="comment"></textarea>
                     </td>
                 </tr>
                 <tr>
                     <td colspan="2">
                         <input type="submit" name="mySubmit" value="ارسال" />
                     </td>
                 </tr>
             </table>
             <input type="hidden" name="answerid" value="0" id="answerid" />
         </form>
    <?php }  ?>

<?php } ?>

<?php
/*   0! = 1! = 1 ;

   n! = n * (n - 1)! ;*/

/*  function fact($n){
      if(!is_int($n) or $n < 0){
          return false;
      }
      else if($n == 0 or $n == 1){
          return  1 ;

      }
      else{
          return  $n * fact($n - 1) ;
      }
  }*/

?>



