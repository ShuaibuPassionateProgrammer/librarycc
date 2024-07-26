<?php include("includes/header.php"); ?>

<?php
session_start();

if(!isset($_SESSION['auth']))
{
    $_SESSION['response'] = "Access denied! Login to access the dashboard.";
    $_SESSION['res_type'] = "warning";
    header("location: ../librarian");
    exit(0);
}
else {
    if(isset($_SESSION['auth']['auth_librarian']))
    {
        echo "Hey! ".$_SESSION['auth_librarian']['librarian_username']." You are welcome to Librarian Dashboard";
        unset($_SESSION['auth_librarian']['librarian_username']);
    }
}
?>

<div class="container p-2 mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php include("message.php"); ?>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row justify-content-center mt-5">
        <div class="col-md-4 mt-5">
            <a href="add_books.php" class="btn btn-outline-primary btn-lg rounded w-100">Cataloguing Worksheet</a>
        </div>

        <div class="col-md-4 mt-5">
            <a href="view_books.php" class="btn btn-outline-primary btn-lg rounded w-100">Classification Worksheet</a>
        </div>
    </div>
</div>