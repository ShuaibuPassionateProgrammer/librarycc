<?php
session_start();
include "includes/header.php";
?>

<div class="container py-5">
    <div class="row justify-content-center mb-4">
        <div class="col-lg-6 col-12 text-center">
            <img src="images/img_4044.jpg" alt="Member Login" class="img-fluid mb-3" style="width:100px;height:100px;object-fit:cover;box-shadow: 0 1px 5px rgba(2,2,2,.2); border-radius: 50%">
            <h2 class="fw-bold mb-2">Member Login</h2>
            <p class="lead text-secondary">Sign in to access your library account.</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6 col-12">
            <div class="card shadow border-0">
                <div class="card-body p-4">
                    <?php include("message.php"); ?>
                    <form action="member-login-code.php" method="post" autocomplete="off">
                        <div class="form-floating mb-3">
                            <input type="text" name="username" id="username" class="form-control" placeholder="Member Username" required autofocus>
                            <label for="username">Username</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Member Password" required>
                            <label for="password">Password</label>
                        </div>
                        <div class="d-grid mb-3">
                            <button type="submit" name="login" class="btn btn-primary btn-lg rounded">Log In</button>
                        </div>
                        <div class="text-center">
                            <p class="mb-1">Not yet a member? <a href="register.php">Register</a></p>
                            <p><a href="/librarycc">Back to Homepage</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "includes/footer.php"; ?>