<?php include "db.php" ?>

<?php 
$sql = "SELECT * FROM categories";
$res = mysqli_query($connection, $sql);


?>

 <div id="page-wrapper">
    <h2>Add New Post</h2>

    <div id="wrapp">
        <div class="row">
            <div class="col-sm-8 col-md-8">
                <form action="incl/functions.php" method="post" enctype="multipart/form-data" >
                    <div class="form-group">
                        <label for="">Post Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Post Author</label>
                        <input type="text" name="author" class="form-control" id="">
                    </div>

                    <div class="form-group">
                        <label for="">Post Category</label>
                    <select name='category' class="form-control" id="">
                        <?php
                            while ($row = mysqli_fetch_array($res)) {
                                $cat_title = $row['cat_title'];
                                echo "<option value='$cat_title'>$cat_title</option>";
                            }
                        ?>
                    </select>
                    </div>

                    <div class="form-group">
                        <label for="">Post Category ID</label>
                    <select name='category_id' class="form-control" id="">
                        <?php
                        $sql = "SELECT * FROM categories";
                        $res = mysqli_query($connection, $sql);
                            while ($row = mysqli_fetch_array($res)) {
                                $cat_id = $row['cat_id'];
                                $cat_title = $row['cat_title'];
                                echo "<option value='$cat_id'>$cat_id - $cat_title</option>";
                            }
                        ?>
                    </select>
                    </div>

                  

                    <div class="form-group">
                        <label for="">Post Content</label>
                        <textarea name="content" class="form-control ckeditor" id="" cols="30" rows="15"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Post Tags</label>
                        <input type="text" name="tags" placeholder="Seperate tags with comma (,)" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Post Status</label>
                        <select name="status" class="form-control" id="">
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                    </select>
                    </div>

                    <div class="form-group">
                        <label for="">Post Image</label>
                        <input type="file" name="image"  class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="submit" name="publish" class="btn btn-primary" value="Publish Post">
                    </div>
                </form>
            </div>
        </div>
    </div>

 </div>

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>

    <!-- ckeditor5 -->
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/17.0.0/classic/ckeditor.js"></script> -->

    <script src="js/bootstrap.js"></script>

  </body>
</html>