<?php
session_start();
if(isset($_POST['logout_btn']))
{
    if(isset($_SESSION['auth']))
    {
        //session_destroy();
        unset($_SESSION['auth']);
        unset($_SESSION['auth_librarian']);
        $_SESSION['response'] = "Logout successfully";
        $_SESSION['res_type'] = "info";
        header("location: ../member");
    }
}