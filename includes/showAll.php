<?php
    if(isset($_GET["section"]) and is_numeric($_GET["section"]))
        $section = $_GET["section"];
    else
        $section = 1 ;

        $start = ($section - 1) * MAX_POST ;
        if($allPosts = Post::getAllPosts(1,true , MAX_POST , $start)){


            foreach ($allPosts as $post){

                if($pos = strpos($post->content , "--more--"))
                    $content = substr($post->content , 0 , $pos);
                else
                    $content = $post->content ;
                    if($comments = Comment::getCommentsByPost_id($post->id))
                        $commentsCount = count($comments);
                    else
                        $commentsCount = 0 ;


                ?>

                <article>
                    <header class="postheader">
                        <h2><a href="./?post=<?php echo $post->id ; ?>"><?php echo $post->title ; ?></a></h2>
                        <p>
                            <?php
                             $creation = convertDate($post->creation_time);
                              echo "نوشته شده در " . $creation["day"] . " " . $creation["month_name"] . " " . $creation["year"] ;

                              echo "در ساعت " . $creation["hour"] . ":" . $creation["minute"] . "توسط " . $post->first_name ;
                              echo " " . $post->last_name . " در گروه " ;

                            foreach ($post->categories as $cat_id) {

                                $cat_name = Category::getCategoryById($cat_id)->category_name; ?>

                                <a href="./?cat=<?php echo $cat_id ;  ?>"><?php echo $cat_name ;  ?></a>

                            <?php } ?>

                        </p>
                    </header>
                    <div class="postbody">
                        <?php
                          echo $content ;
                        ?>
                    </div>
                    <footer id="postfooter">
                        <div class="comcon">
                            <span class="commentsbutton">
                                <a href="./?post=<?php echo $post->id ;?>#comments"><?php echo $commentsCount ; ?> دیدگاه</a>
                            </span>
                            <span class="continuebutton">
                                <a href="./?post=<?php echo $post->id ; ?>">ادامه مطلب</a>
                            </span>
                        </div>
                    </footer>
                    <div class="postseperator"></div>
                </article>


          <?php  }
               $totalPost = count(Post::getAllPosts());
              $totalSection = ceil($totalPost / MAX_POST) ;
            ?>

            <div id="paging">

                <p>صفحه‌ی <?php echo $section ;  ?> از <?php echo $totalSection ; ?> </p>
                <ul id="paging">

                    <?php
                      for($i = 1 ; $i <= $totalSection ; $i++){
                          if($i == $section)  $class = "class=active" ;
                          else $class = "" ;
                          echo  "<li><a href=\"./?section=$i\" $class>$i</a></li>" ;
                      }
                    ?>

                </ul>
            </div>

   <?php     } ?>
