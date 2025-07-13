<?php
session_start();
include "../config/db_con.php";

if(isset($_POST['login'])) {
    // Input validation
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // Prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT id, username, password FROM librarian WHERE username = ? LIMIT 1");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Use password_verify for secure password checking
        if(password_verify($password, $row['password'])) {
            $_SESSION['auth'] = true;
            $_SESSION['auth_librarian'] = [
                'librarian_id' => $row['id'],
                'librarian_username' => $row['username']
            ];
            $_SESSION['response'] = "Logged In Successfully";
            $_SESSION['res_type'] = "success";
            header("location: librarian_dashboard.php");
            exit(0);
        } else {
            $_SESSION['response'] = "Invalid Username or Password";
            $_SESSION['res_type'] = "danger";
            header("location: ../librarian");
            exit(0);
        }
    } else {
        $_SESSION['response'] = "Invalid Username or Password";
        $_SESSION['res_type'] = "danger";
        header("location: ../librarian");
        exit(0);
    }
    $stmt->close();
}
// else
// {
//     $_SESSION["response"] = "Access denied!";
//     $_SESSION["res_type"] = "warning";
//     header("location: ../librarian");
//     exit(0);
// }
?>