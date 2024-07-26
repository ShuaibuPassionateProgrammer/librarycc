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
    $pages = mysqli_real_escape_string($conn, $_POST['pages']);
    $mainpages = mysqli_real_escape_string($conn, $_POST['mainpages']);
    $illustration = mysqli_real_escape_string($conn, $_POST['illustration']);
    $length = mysqli_real_escape_string($conn, $_POST['length']);
    $note = mysqli_real_escape_string($conn, $_POST['note']);
    $series = mysqli_real_escape_string($conn, $_POST['series']);
    $isbn = mysqli_real_escape_string($conn, $_POST['isbn']);
    $hbk = mysqli_real_escape_string($conn, $_POST['hbk']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $callno = mysqli_real_escape_string($conn, $_POST['callno']);
}
?>