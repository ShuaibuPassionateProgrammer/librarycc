<?php
session_start();
include "../config/db_con.php";

if(isset($_POST['login']))
{
    $username = mysqli_real_escape_string($conn, $_POST['username']);
}