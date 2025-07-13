<?php
include "../includes/auth_check.php";
include "../includes/header.php";
include "../includes/navbar.php";
?>

<div class="container p-2 mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php include("message.php"); ?>
            <?php
            if (isset($_SESSION['auth_librarian']['librarian_username'])) {
                echo '<div class="alert alert-success">Hey! ' . htmlspecialchars($_SESSION['auth_librarian']['librarian_username']) . ' - You are welcome to the Librarian Dashboard.</div>';
            }
            ?>
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

<?php include("includes/footer.php"); ?>