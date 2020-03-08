<?php  
$query = "SELECT * FROM posts";
$result = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($result)) {

  $post_id = $row['post_id'];
  $post_title = $row['post_title'];
  $post_author = $row['post_author'];
  $post_category = $row['post_category'];
  $post_tags = $row['post_tags'];
  $post_content = $row['post_content'];
  $post_status = $row['post_status'];

  $date = $row['post_date'];

  $post_views = $row['post_views'];
  $post_comment_count = $row['post_comment_count'];
?>

<div class="col-md-6">
                  <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                    <img src="images/img_5.jpg" alt="Image placeholder">
                    <div class="blog-content-body">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="images/person_1.jpg" alt=""> <?php echo $post_author ?></span>&bullet;
                        <span class="mr-2"><?php echo $date; ?></span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"> </span><?php echo " ".$post_comment_count;?> </span>
                      </div>
                      <h2><?php echo $post_title; ?></h2>
                    </div>
                  </a>
                </div>

<?php
}

?>
