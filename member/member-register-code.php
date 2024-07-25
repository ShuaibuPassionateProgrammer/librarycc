<?php
session_start();
include "../config/db_con.php";

if(isset($_POST['register']))
{
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
}