<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "blog_cms";

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$connection) {
    die("Connection error" .mysqli_error($connection));
}


?>