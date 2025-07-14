<?php include("includes/header.php"); ?>
<?php include("includes/navbar.php"); ?>

<!-- Hero Section -->
<div class="container-fluid py-5 bg-light text-center mb-5" style="background: linear-gradient(90deg, #e3f2fd 0%, #ffffff 100%);">
    <h1 class="display-4 fw-bold mb-3">Welcome to Library Cat & Class</h1>
    <p class="lead mb-4">A modern platform for managing library members and books with ease.</p>
</div>

<div class="container mb-5">
    <div class="row justify-content-center g-4">
        <div class="col-md-5 col-12">
            <a href="member/" class="text-decoration-none">
                <div class="card shadow-lg border-0 rounded-4 h-100 transition hover-shadow">
                    <div class="card-body text-center">
                        <img src="images/img_4044.JPG" alt="Member Login" class="img-fluid mb-3" style="width:120px;height:120px;object-fit:cover;box-shadow: 0 1px 5px rgba(2,2,2,.2); border-radius: 50%">
                        <h5 class="card-title mb-3">Member Portal</h5>
                        <p class="card-text mb-4">Access your account, search for books, and manage your borrowing history.</p>
                        <button class="btn btn-primary btn-lg px-4 py-2 rounded-3 w-75" aria-label="Go to Member Portal">Go to Member</button>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-5 col-12">
            <a href="librarian/" class="text-decoration-none">
                <div class="card shadow-lg border-0 rounded-4 h-100 transition hover-shadow">
                    <div class="card-body text-center">
                        <img src="images/img_4045.JPG" alt="Librarian Login" class="img-fluid mb-3" style="width:120px;height:120px;object-fit:cover;box-shadow: 0 1px 5px rgba(2,2,2,.2); border-radius: 50%">
                        <h5 class="card-title mb-3">Librarian Portal</h5>
                        <p class="card-text mb-4">Manage the library, catalog books, and assist members efficiently.</p>
                        <button class="btn btn-success btn-lg px-4 py-2 rounded-3 w-75" aria-label="Go to Librarian Portal">Go to Librarian</button>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>