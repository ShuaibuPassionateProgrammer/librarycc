<?php
include "../includes/auth_check.php";
include "../includes/header.php";
include "../includes/navbar.php";

    if(!isset($_SESSION['auth']))
    {
        $_SESSION['response'] = "Access denied! Login to access the member dashboard.";
        $_SESSION['res_type'] = "warning";
        header("location: ../member");
        exit(0);
    }
    else
    {
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
            <?php include("message.php"); ?>
        </div>
    </div>
</div>

<div class="container">
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
                <div class="card rounded">
                    <div class="card-body text-center">
                        <button class="btn btn-outline-primary rounded librarian w-50">Update Books</button>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="delete_books.php">
                <div class="card rounded">
                    <div class="card-body text-center">
                        <button class="btn btn-outline-primary rounded librarian w-50">Delete Books</button>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>