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

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Register New Librarian</h4>
                </div>
                <div class="card-body">
                    <?php if(isset($_SESSION['response'])): ?>
                        <div class="alert alert-<?php echo $_SESSION['res_type']; ?>">
                            <?php echo $_SESSION['response']; unset($_SESSION['response'], $_SESSION['res_type']); ?>
                        </div>
                    <?php endif; ?>
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="cpassword">Confirm Password</label>
                            <input type="password" name="cpassword" id="cpassword" class="form-control" required>
                        </div>
                        <button type="submit" name="register" class="btn btn-primary w-100">Register Librarian</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "includes/footer.php"; ?>
