<?php
session_start();
include "../config/db_con.php";

if(isset($_POST['login']))
{
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $password = sha1($password);

    $query = "SELECT * FROM librarian WHERE username='$username' AND password='$password' LIMIT 1";
    $query_run = mysqli_query($conn, $query);

    if(mysqli_num_rows($query_run) > 0)
    {}
}