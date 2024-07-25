<?php
session_start();
include "../config/db_con.php";

if(isset($_POST['register']))
{
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
    $password = sha1($password);
    $cpassword = sha1($cpassword);

    if($password == $cpassword)
    {
        $query = "INSERT INTO member(firstname, lastname, username, email, password)VALUES('$firstname','$lastname','$username','$email','$password')";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {}
    }
}