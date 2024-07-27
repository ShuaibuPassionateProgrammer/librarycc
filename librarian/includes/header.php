<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
            <h3 class="text-light">Library Class & Cat</h3>
            <?php
                /*if(isset($_SESSION['auth']))
                {
                    echo $_SESSION['auth_librarian']['librarian_username'];
                }
                else
                {
                    echo "Not logged in";
                }*/
            ?>
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
        </nav>
    </div>