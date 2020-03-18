
<?php include "incl/header.php" ?>
    

    <div class="wrap">

    <?php include "incl/navigation.php" ?>
      <!-- END header -->

    <section class="site-section py-lg">
      <div class="container">
        
        <div class="row blog-entries element-animate">
        <?php
          if (isset($_GET['post'])) {
            $p_t = $_GET['post'];
          //  $new = str_replace('%20', '-', '$post_title');

            $query = "SELECT * FROM `posts` WHERE `post_title` = '$p_t'";
            $result= mysqli_query($connection, $query);
          }else {
            header("location: index.php");
          }


        ?>

        

          <div class="col-md-12 col-lg-8 main-content">

          <?php
        
        while ($row = mysqli_fetch_assoc($result)) {
          $post_id = $row['post_id'];
          $post_title = $row['post_title'];
          $post_author = $row['post_author'];
          $post_category = $row['post_category'];
          $post_tags = $row['post_tags'];
          $post_content = $row['post_content'];
          $post_status = $row['post_status'];
          $post_image = $row['post_image'];

          $date = $row['post_date'];

          $post_views = $row['post_views'];
          $post_comment_count = $row['post_comment_count'];

          ?>


          <img src="admin/images/<?php echo $post_image ?>" alt="Image" class="img-fluid mb-5">
             <div class="post-meta">
             <span class="author mr-2"><img src="images/person_1.jpg" alt="image" class="mr-2"> <?php echo $post_author ?></span>&bullet;
                        <span class="mr-2"><?php echo $date ?> </span> &bullet;
                        <span class="mr-2"><span class="fa fa-eye"></span><?php echo  " ".$post_views; ?></span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> <?php echo $post_comment_count ?></span>
                      </div>
            <h1 class="mb-4"><?php echo $post_title ?></h1>
            <a class="category mb-5" href="#"><?php echo $post_category ?></a> 
           
            <div class="post-content-body"><?php echo $post_content ?></div>

            
            <div class="pt-5">
              <p>Categories:  <a href="#"><?php echo $post_category ?></a> Tags: <a href="#"><?php echo "#".$post_tags ?></a></p>
            </div>


            <div class="pt-5">
              <h3 class="mb-5">6 Comments</h3>
              <ul class="comment-list">
                <li class="comment">
                  <div class="vcard">
                    <img src="images/person_1.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>Jean Doe</h3>
                    <div class="meta">January 9, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply rounded">Reply</a></p>
                  </div>
                </li>

                <li class="comment">
                  <div class="vcard">
                    <img src="images/person_1.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>Jean Doe</h3>
                    <div class="meta">January 9, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply rounded">Reply</a></p>
                  </div>

                  <ul class="children">
                    <li class="comment">
                      <div class="vcard">
                        <img src="images/person_1.jpg" alt="Image placeholder">
                      </div>
                      <div class="comment-body">
                        <h3>Jean Doe</h3>
                        <div class="meta">January 9, 2018 at 2:21pm</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p><a href="#" class="reply rounded">Reply</a></p>
                      </div>


                      <ul class="children">
                        <li class="comment">
                          <div class="vcard">
                            <img src="images/person_1.jpg" alt="Image placeholder">
                          </div>
                          <div class="comment-body">
                            <h3>Jean Doe</h3>
                            <div class="meta">January 9, 2018 at 2:21pm</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                            <p><a href="#" class="reply rounded">Reply</a></p>
                          </div>

                            <ul class="children">
                              <li class="comment">
                                <div class="vcard">
                                  <img src="images/person_1.jpg" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                  <h3>Jean Doe</h3>
                                  <div class="meta">January 9, 2018 at 2:21pm</div>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                  <p><a href="#" class="reply rounded">Reply</a></p>
                                </div>
                              </li>
                            </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li class="comment">
                  <div class="vcard">
                    <img src="images/person_1.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>Jean Doe</h3>
                    <div class="meta">January 9, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply rounded">Reply</a></p>
                  </div>
                </li>
              </ul>
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form action="#" class="p-5 bg-light">
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" class="form-control" id="website">
                  </div>

                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn btn-primary">
                  </div>

                </form>
              </div>
            </div>

          </div>


       <?php }



          ?>

            

          <!-- END main-content -->

          <div class="col-md-12 col-lg-4 sidebar">
              <div class="sidebar-box search-form-wrap">
                <form action="search.php" class="search-form" method="post">
                  <div class="form-group">
                    <span class="icon fa fa-search"></span>
                    <input type="text" name="search" class="form-control" id="s" placeholder="Type a keyword">
                  </div>
                </form>
              </div>

            <!-- END sidebar-box -->  
            <?php include 'incl/ppost.php'; ?>
            <!-- END sidebar-box -->

            <?php include 'incl/categories.php'; ?>
            <!-- END sidebar-box -->

            <?php include 'incl/tags.php'; ?>

          </div>
          <!-- END sidebar -->

        </div>
      </div>
    </section>

    <?php include 'incl/relatedpost.php'; ?>
    <!-- END section -->
  
  
      <!-- END footer -->

    </div>
    
    <!-- loader -->
    <?php include 'incl/foot.php'; ?>