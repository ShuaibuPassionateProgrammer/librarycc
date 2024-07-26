<?php
session_start();
include "../config/db_con.php";

if(isset($_POST['add_book']))
{
    $main_author = mysqli_real_escape_string($conn, $_POST['main_author']);
}
?>