<?php include "admin/incl/db.php" ?>

<?php

function show_cat(){
    global $connection;
    $query = "SELECT * FROM categories";
    $result = mysqli_query($connection,$query);

    while ($row = mysqli_fetch_assoc($result)) {
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];

        echo "<li class='nav-item dropdown'>
        <a class='nav-link toggle' href='category.php?cat_id=$cat_id'>{$cat_title}</a>
      </li>";
        
    }
}





?>