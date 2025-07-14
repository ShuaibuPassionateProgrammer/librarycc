<?php
include "../includes/auth_check.php";
include "../includes/header.php";
include "../includes/navbar.php";
include "../config/db_con.php";

// Handle form submission
if (isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // Check if passwords match
    if ($password !== $cpassword) {
        $_SESSION['response'] = "Passwords do not match";
        $_SESSION['res_type'] = "danger";
    } else {
        // Check for existing username or email
        $stmt = $conn->prepare("SELECT id FROM librarian WHERE username = ? OR email = ? LIMIT 1");
        $stmt->bind_param("ss", $username, $email);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            $_SESSION['response'] = "Username or Email already exists";
            $_SESSION['res_type'] = "danger";
            $stmt->close();
        } else {
            $stmt->close();
            // Hash the password
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            // Insert new librarian
            $stmt = $conn->prepare("INSERT INTO librarian (username, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $email, $password_hash);
            $result = $stmt->execute();
            if ($result) {
                $_SESSION['response'] = "Librarian registered successfully";
                $_SESSION['res_type'] = "success";
            } else {
                $_SESSION['response'] = "Registration failed. Please try again.";
                $_SESSION['res_type'] = "danger";
            }
            $stmt->close();
        }
    }
}
?>

<div class="container py-5">
    <div class="row justify-content-center mb-4">
        <div class="col-lg-6 col-12 text-center">
            <h2 class="fw-bold mb-2">Librarian Registration</h2>
            <p class="lead text-secondary">Create a new librarian account to manage the library system securely.</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6 col-12">
            <div class="card shadow border-0">
                <div class="card-body p-4">
                    <?php if(isset($_SESSION['response'])): ?>
                        <div class="alert alert-<?php echo $_SESSION['res_type']; ?> alert-dismissible fade show" role="alert">
                            <?php echo $_SESSION['response']; unset($_SESSION['response'], $_SESSION['res_type']); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    <form method="POST" action="" autocomplete="off">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required autofocus>
                                    <label for="username">Username</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email address" required>
                                    <label for="email">Email address</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password" required>
                                    <label for="cpassword">Confirm Password</label>
                                </div>
                            </div>
                            <div class="col-12 d-grid mb-3">
                                <button type="submit" name="register" class="btn btn-success btn-lg rounded">Register</button>
                            </div>
                            <div class="col-12 text-center">
                                <p class="mb-1">Already have an account? <a href="index.php">Login</a></p>
                                <p><a href="/librarycc">Back to Homepage</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "includes/footer.php"; ?>
