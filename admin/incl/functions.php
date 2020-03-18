


<?php include "db.php" ?>

<?php
function add_category(){
    global $connection;

    if (isset($_POST["add_cat"])) {
        if (empty($_POST["cat_title"])) {
           header("location: ../category.php?field cannot be empty!");
        }else {
               $cat_title = $_POST["cat_title"];

               $query = "INSERT INTO categories(cat_title) VALUES ('$cat_title')";
               $result = mysqli_query($connection, $query);

               if (!$result) {
                   die("Could not send data" . mysqli_error($connection));
               }else {
                header("location: ../category.php?Category Added Successfully");
               }
             }
            }
        }
        add_category();



function show_category(){
    global $connection;

    $query = "SELECT * FROM categories";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $cat_title = $row['cat_title'];
        $cat_id = $row['cat_id'];
       
        echo "<tr>";
        echo "<td>{$cat_title}</td>";
        echo "<td><a href='category.php?delete_cat={$cat_id}'>Delete</td>";
        echo "</tr>";
    }
    
}

function delete_category(){
    error_reporting(0);
    global $connection;
    if (isset($_GET['delete_cat'])) {
        $cat_id = $_GET['delete_cat'];

        $query = "DELETE FROM `categories` WHERE `categories`.`cat_id` =  $cat_id";
        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("Could not Delete data" ." ". mysqli_error($connection));
        }else {
         header("location: ../category.php?Category Deleted Successfully");
        
        }
    }
}

delete_category();


//CREATE POST SECTION
function create_post(){
    global $connection;
    if (isset($_POST['publish'])) {
        $post_title = $_POST['title'];
        $post_author = $_POST['author'];
        $post_category = $_POST['category'];
        $post_category_id = $_POST['category_id'];
        $post_tags = $_POST['tags'];
        $post_content = $_POST['content'];
        $post_status = $_POST['status'];

        $date = date('D, d M Y');

        $post_views = 0;
        $post_comment_count = 0;

        if (isset($_FILES['image'])) {
            $dir = "../images";
            $target_file = $dir.basename($_FILES['image']['name']);
            if (move_uploaded_file($_FILES['image']['tmp_name'],$target_file)) {
                echo "Image uploaded successfilly" ."";
            }else {
                echo "Something went wrong while uploading the image file" ." ";
            }
           
        }
        $query = "INSERT INTO posts(post_title,post_author,post_category,post_tags,post_content,post_status,post_image,post_views,post_comment_count,post_date,post_category_id)
        VALUES('$post_title','$post_author','$post_category','$post_tags','$post_content','$post_status','$target_file','$post_views','$post_comment_count','$date','$post_category_id')";

        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("Could not send data!"." ".mysqli_error($connection));
            header("location: ../post.php?source=create_post");
        }else {
            header("location: ../post.php?post_published");
        }
    }
}

create_post();

// SHOW POST SECTION
function show_post(){
    global $connection;
    $query = "SELECT * FROM posts ORDER BY post_id DESC LIMIT 10";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $post_id = $row['post_id'];
        $post_title = $row['post_title'];
        $post_author = $row['post_author'];
        $post_category = $row['post_category'];
        $post_tags = $row['post_tags'];
        $post_image = $row['post_image'];
        $post_status = $row['post_status'];

        $date = $row['post_date'];

        $post_views = $row['post_views'];
        $post_comment_count = $row['post_comment_count'];

        echo "<tr>";
        // echo "<td>{$post_id}</td>";
        echo "<td>{$post_title}</td>";
        echo "<td>{$post_author}</td>";
        echo "<td>{$post_category}</td>";
        echo "<td>{$post_status}</td>";
        echo "<td><img src='images/{$post_image}' width='50px'></td>";
        // echo "<td>{$post_content}</td>";
        echo "<td>{$date}</td>";
        echo "<td>{$post_tags}</td>";
        echo "<td>{$post_views}</td>";
        echo "<td>{$post_comment_count}</td>";
       
        // echo "<td><a href='post.php?approve=$post_id'>Approve</a></td>";
        // echo "<td><a href='post.php?unapprove=$post_id'>Unapprove</a></td>";
        echo "<td><a href='post.php?edit=$post_id'>Edit</a></td>";
        echo "<td><a href='post.php?delete=$post_id'>Delete</a></td>";
        echo "</tr>";
        
    }
}

?> 
