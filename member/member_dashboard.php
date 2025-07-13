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

<div class="container py-5">
    <div class="row justify-content-center mb-4">
        <div class="col-lg-8 col-12">
            <div class="text-center mb-4">
                <h2 class="fw-bold mb-2">Member Dashboard</h2>
                <p class="lead text-secondary">Search, view, and manage your books easily.</p>
            </div>
            <?php include("message.php"); ?>
        </div>
    </div>
    <div class="row justify-content-center g-4">
        <div class="col-md-4 col-12">
            <a href="add_books.php" class="text-decoration-none">
                <div class="card shadow-lg border-0 rounded-4 h-100 transition hover-shadow">
                    <div class="card-body text-center py-5">
                        <i class="bi bi-journal-plus display-4 text-primary mb-3"></i>
                        <h5 class="card-title mb-2">Add Books</h5>
                        <p class="card-text mb-4">Submit new books for your collection.</p>
                        <button class="btn btn-primary btn-lg px-4 py-2 rounded-3 w-75" aria-label="Add Books">Add</button>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 col-12">
            <a href="view_books.php" class="text-decoration-none">
                <div class="card shadow-lg border-0 rounded-4 h-100 transition hover-shadow">
                    <div class="card-body text-center py-5">
                        <i class="bi bi-book display-4 text-success mb-3"></i>
                        <h5 class="card-title mb-2">View Books</h5>
                        <p class="card-text mb-4">See all books you have access to.</p>
                        <button class="btn btn-success btn-lg px-4 py-2 rounded-3 w-75" aria-label="View Books">View</button>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 col-12">
            <a href="update_books.php" class="text-decoration-none">
                <div class="card shadow-lg border-0 rounded-4 h-100 transition hover-shadow">
                    <div class="card-body text-center py-5">
                        <i class="bi bi-pencil-square display-4 text-warning mb-3"></i>
                        <h5 class="card-title mb-2">Update Books</h5>
                        <p class="card-text mb-4">Edit information for your books.</p>
                        <button class="btn btn-warning btn-lg px-4 py-2 rounded-3 w-75" aria-label="Update Books">Update</button>
                    </div>
                </div>
            </a>
        </div>>
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