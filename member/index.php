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
            <form action="member-login-code.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label><br>
                    <input type="text" name="username" id="username" placeholder="Member Username" class="form-control rounded">
                </div>
                <div class="form-group">
                    <label for="password">Password</label><br>
                    <input type="password" name="password" id="password" placeholder="Member Password" class="form-control rounded">
                </div>
                <div class="form-group text-right">
                    <input type="submit" value="Log In" name="login" class="btn btn-outline-primary rounded" style="width: 20%">
                </div>
                <div class="form-group text-center">
                    <p>Not yet a member?<a href="register.php">Register</a></p>
                    <p><a href="<?= __FILE__; ?>">Back to Homepage</a></p>
                </div>
            </form>
        </div>
    </div>
</div>