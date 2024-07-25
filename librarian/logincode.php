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
    {
        while($row = mysqli_fetch_assoc($query_run))
        {
            $librarian_id = $row['id'];
            $librarian_username = $row['username'];
            $librarian_password = $row['password'];
        }

        $_SESSION['auth'] = true;
        $_SESSION['auth_librarian'] = [
            'librarian_id' => $librarian_id,
            'librarian_username' => $librarian_username,
            'librarian_password' => $librarian_password
        ];

        $_SESSION['response'] = "Logged In Successfully";
        $_SESSION['res_type'] = "success";
        header("location: librarian_dashboard.php");
        exit(0);
    }
    else {}
}