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

    /*$username_check = "SELECT username FROM member WHERE username='$username'";
    $username_check_run = mysqli_query($conn, $username_check);

    if($username_check_run)
    {
        $_SESSION['response'] = "Username is already taken";
        $_SESSION['res_type'] = "danger";
        header("location: register.php");
        return false;
    }

    $email_check = "SELECT email FROM member WHERE email='$email'";
    $email_check_run = mysqli_query($conn, $email_check);

    if($email_check_run)
    {
        $_SESSION['response'] = "Email id is already taken";
        $_SESSION['res_type'] = "danger";
        header("location: register.php");
        return false;
    }*/

    if($password == $cpassword)
    {
        $query = "INSERT INTO member(firstname, lastname, username, email, password)VALUES('$firstname','$lastname','$username','$email','$password')";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            $_SESSION['response'] = "Registration is successful";
            $_SESSION['res_type'] = "success";
            header("location: ../member");
        }
    }
    else
    {
        $_SESSION['response'] = "Two Password does not match";
        $_SESSION['res_type'] = "danger";
        header("location: register.php");
    }

    
}
?>