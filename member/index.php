<?php
session_start();
include "includes/header.php";
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <img src="images/img_4044.jpg" alt="" class="logo p-2" style="box-shadow: 0 1px 5px rgba(2,2,2,.2); border-radius: 200px">
    </div>
</div>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <?php include("message.php"); ?>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <form action="member-login-code.php" method="post"></form>
        </div>
    </div>
</div>