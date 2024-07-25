<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Library CC</title>
</head>
<body>
    <?php
    session_start();
    ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <img src="images/img_4045.png" alt="" class="logo p-2">
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <?php include("message.php"); ?>
                <form action="logincode.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" placeholder="Librarian Username" class="form-control rounded" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Librarian Password" class="form-control rounded" required>
                    </div>

                    <div class="form-group text-right">
                        <input type="submit" name="login" value="Log In" class="btn btn-outline-primary rounded" style="width: 20%">
                    </div>

                    <div class="form-group text-center">
                        <!--<p>Not yet a member?<a href="register.php">Register</a></p>-->
                        <p><a href="/librarycc">Back to Homepage</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>