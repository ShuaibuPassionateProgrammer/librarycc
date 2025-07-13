<?php
include "../includes/auth_check.php";
include "../includes/header.php";
include "../includes/navbar.php";
?>

<div class="container py-5">
    <div class="row justify-content-center mb-4">
        <div class="col-lg-8 col-12">
            <div class="text-center mb-4">
                <h2 class="fw-bold mb-2">Librarian Dashboard</h2>
                <p class="lead text-secondary">Manage cataloguing, classification, and more from one place.</p>
            </div>
            <?php include("message.php"); ?>
            <?php
            if (isset($_SESSION['auth_librarian']['librarian_username'])) {
                echo '<div class="alert alert-success text-center">Hey! <strong>' . htmlspecialchars($_SESSION['auth_librarian']['librarian_username']) . '</strong> - Welcome to the Librarian Dashboard.</div>';
            }
            ?>
        </div>
    </div>
    <div class="row justify-content-center g-4">
        <div class="col-md-5 col-12">
            <a href="add_books.php" class="text-decoration-none">
                <div class="card shadow-lg border-0 rounded-4 h-100 transition hover-shadow">
                    <div class="card-body text-center py-5">
                        <i class="bi bi-journal-plus display-4 text-primary mb-3"></i>
                        <h5 class="card-title mb-2">Cataloguing Worksheet</h5>
                        <p class="card-text mb-4">Add and organize new books in the library collection.</p>
                        <button class="btn btn-primary btn-lg px-4 py-2 rounded-3 w-75" aria-label="Go to Cataloguing Worksheet">Go</button>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-5 col-12">
            <a href="view_books.php" class="text-decoration-none">
                <div class="card shadow-lg border-0 rounded-4 h-100 transition hover-shadow">
                    <div class="card-body text-center py-5">
                        <i class="bi bi-book-half display-4 text-success mb-3"></i>
                        <h5 class="card-title mb-2">Classification Worksheet</h5>
                        <p class="card-text mb-4">View, classify, and manage all catalogued books.</p>
                        <button class="btn btn-success btn-lg px-4 py-2 rounded-3 w-75" aria-label="Go to Classification Worksheet">Go</button>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>