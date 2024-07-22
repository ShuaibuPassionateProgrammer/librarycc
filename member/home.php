<?php
session_start();
include "../config/db_con.php";
?>

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
            <h3 class="text-light">Library Cat & Class</h3>
            <?php
            /*if(isset($_SESSION['auth']))
            {
                echo $_SESSION['auth_librarian']['librarian_username'];
            }
            else
            {*/
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
            </di>
        </nav>
    </div>

    <?php
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
    <div class="container-fluid p-2">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php include("message.php"); ?>
            </div>
        </div>
    </div>

    <div class="container-fluid p-2">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Book Classifications</h3>
                    </div>
                    <div class="card-body text-right">
                        <form method="post">
                            <table>
                                <tbody>
                                    <td>
                                        <input type="text" name="accession_no" class="form-control w-100" placeholder="Enter the Accession Number to Locate a Book">
                                    </td>
                                    <td>
                                        <input type="submit" name="btn_search" value="Search" class="btn btn-outline-success ">
                                    </td>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container p-2">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <?php
                if(isset($_POST['btn_search']))
                {
                    $accession_no = mysqli_real_escape_string($conn, $_POST['accession_no']);
                    $search_query = "SELECT accessno FROM book WHERE accessno LIKE '%$accession_no%'";
                    $search_query_run = mysqli_query($conn, $search_query);

                    if(mysqli_num_rows($search_query_run) > 0)
                    {}
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>