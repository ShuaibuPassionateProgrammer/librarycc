<?php
session_start();
include "../config/db_con.php";

if(isset($_POST['register'])) {
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // Check if passwords match
    if($password !== $cpassword) {
        $_SESSION['response'] = "Passwords do not match";
        $_SESSION['res_type'] = "danger";
        header("location: register.php");
        exit(0);
    }

    // Check for existing username or email
    $stmt = $conn->prepare("SELECT id FROM member WHERE username = ? OR email = ? LIMIT 1");
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $stmt->store_result();
    if($stmt->num_rows > 0) {
        $_SESSION['response'] = "Username or Email already exists";
        $_SESSION['res_type'] = "danger";
        header("location: register.php");
        $stmt->close();
        exit(0);
    }
    $stmt->close();

    // Hash the password
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Insert new member with prepared statement
    $stmt = $conn->prepare("INSERT INTO member (firstname, lastname, username, email, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $firstname, $lastname, $username, $email, $password_hash);
    $result = $stmt->execute();
    if($result) {
        $_SESSION['response'] = "Registration is successful";
        $_SESSION['res_type'] = "success";
        header("location: ../member");
        $stmt->close();
        exit(0);
    } else {
        $_SESSION['response'] = "Registration failed. Please try again.";
        $_SESSION['res_type'] = "danger";
        header("location: register.php");
        $stmt->close();
        exit(0);
    }
}
?>