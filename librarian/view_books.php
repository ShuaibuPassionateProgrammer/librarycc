<?php
session_start();
include "../config/db_con.php";
include "includes/header.php";
?>

<?php
if(!isset($_SESSION['auth']))
{
    $_SESSION['response'] = "Access denied! Login to access the dashboard.";
    $_SESSION['res_type'] = "warning";
    header("location: ../librarian");
    exit(0);
}
?>