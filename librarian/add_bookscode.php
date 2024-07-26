<?php
session_start();
include "../config/db_con.php";

if(isset($_POST['add_book']))
{
    $main_author = mysqli_real_escape_string($conn, $_POST['main_author']);
    $other_author = mysqli_real_escape_string($conn, $_POST['other_author']);
    $editors = mysqli_real_escape_string($conn, $_POST['editors']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $edition = mysqli_real_escape_string($conn, $_POST['edition']);
    $tmaterial = mysqli_real_escape_string($conn, $_POST['tmaterial']);
    $publication = mysqli_real_escape_string($conn, $_POST['publication']);
    $publisher = mysqli_real_escape_string($conn, $_POST['publisher']);
}
?>