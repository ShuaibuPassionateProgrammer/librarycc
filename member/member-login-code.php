<?php
session_start();
include "../config/db_con.php";

if(isset($_POST['login']))
{
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $password = sha1($password);

    $query = "SELECT * FROM member WHERE username='$username' AND password='$password' LIMIT 1";
    $query_run = mysqli_query($conn, $query);

    if(mysqli_num_rows($query_run) > 0)
    {
        while($row = mysqli_fetch_assoc($query_run))
        {
            $member_id = $row['id'];
            $member_username = $row['username'];
            $member_password = $row['password'];
        }

        $_SESSION['auth'] = true;
        $_SESSION['auth_member'] = [
            'member_id' => $librarian_id,
            'member_username' => $member_username,
            'member_password' => $member_password
        ];
    }
}