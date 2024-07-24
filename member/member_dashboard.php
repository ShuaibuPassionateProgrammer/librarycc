<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library CC</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .header {
            background-color: #343a40;
        }
        .rounded {
            border-radius: 20px !important;
        }
    </style>
</head>
<body>
    <div class="container-fluid header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a href="index.php" class="navbar-brand">
                <img src="images/library_image.png" width="50" height="50" alt="Library Image Logo">
            </a>
            <h3 class="text-light">Library CC</h3>
            <div class="collapse navbar-collapse">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <form action="logout.php" method="post">
                                <button type="submit" name="logout_btn" class="btn btn-secondary">Logout</button>
                            </form>
                        </li>
                    </ul>

                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Profile</a>
                        <a href="#" class="dropdown-item">Settings</a>
                        <form action="logout.php" method="post">
                            <button type="submit" name="logout_btn" class="dropdown-item">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <?php
    session_start();
    
    if(!isset($_SESSION['auth']))
    {
        $_SESSION['response'] = "Access denied! Login to access the member dashboard.";
        $_SESSION['res_type'] = "warning";
        header("location: ../member");
        exit(0);
    }
    else {
        if(isset($_SESSION['auth']['auth_member']))
        {
            echo "Hey! ".$_SESSION['auth_member']['member_username']." You are welcome to Librarian Dashboard";
            unset($_SESSION['auth_member']['member_username']);
        }
    }
    ?>
    <div class="container p-2">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php inlcude("message.php"); ?>
            </div>
        </div>
    </div>

    <div class="container p-2">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <a href="add_books.php">
                    <div class="card rounded">
                        <div class="card-body text-center">
                            <button class="btn btn-outline-primary rounded librarian w-50">Add Books</button>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="view_books.php">
                    <div class="card rounded">
                        <div class="card-body text-center">
                            <button class="btn btn-outline-primary rounded librarian w-50">View Books</button>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="update_books.php">
                    <div class="card-rounded">
                        <div class="card-body text-center"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>
</html>