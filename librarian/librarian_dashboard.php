<?php include("includes/header.php"); ?>

<?php
session_start();

if(!isset($_SESSION['auth']))
{
    $_SESSION['response'] = "Access denied! Login to access the dashboard.";
    $_SESSION['res_type'] = "warning";
    header("location: ../librarian");
    exit(0);
}
else {
    if(isset($_SESSION['auth']['auth_librarian']))
    {
        echo "Hey! ".$_SESSION['auth_librarian']['librarian_username']." You are welcome to Librarian Dashboard";
        unset($_SESSION['auth_librarian']['librarian_username']);
    }
}