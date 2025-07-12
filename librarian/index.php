<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Optional: Include a custom stylesheet -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>
<body>

<?php session_start(); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-auto">
            <img src="images/img_4045.png" alt="Library Logo" class="logo p-2">
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <?php include("message.php"); ?>

            <form action="logincode.php" method="POST">
                <div class="form-group mb-3">
                    <label for="username">Username</label>
                    <input 
                        type="text" 
                        name="username" 
                        id="username" 
                        placeholder="Librarian Username" 
                        class="form-control rounded" 
                        required
                    >
                </div>

                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input 
                        type="password" 
                        name="password" 
                        id="password" 
                        placeholder="Librarian Password" 
                        class="form-control rounded" 
                        required
                    >
                </div>

                <div class="form-group text-end mb-3">
                    <input 
                        type="submit" 
                        name="login" 
                        value="Log In" 
                        class="btn btn-outline-primary rounded" 
                        style="width: 30%;"
                    >
                </div>

                <div class="form-group text-center">
                    <!-- <p>Not yet a member? <a href="register.php">Register</a></p> -->
                    <p><a href="/librarycc">Back to Homepage</a></p>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>

</body>
</html>
