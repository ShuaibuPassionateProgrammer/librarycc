<?php
session_start();
include "../config/db_con.php";

if(isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, username, password FROM member WHERE username = ? LIMIT 1");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if(password_verify($password, $row['password'])) {
            $_SESSION['auth'] = true;
            $_SESSION['auth_member'] = [
                'member_id' => $row['id'],
                'member_username' => $row['username']
            ];
            $_SESSION['response'] = "Logged In Successfully";
            $_SESSION['res_type'] = "success";
            header("location: home.php");
            exit(0);
        } else {
            $_SESSION['response'] = "Invalid Username or Password";
            $_SESSION['res_type'] = "danger";
            header("location: ../member");
            exit(0);
        }
    } else {
        $_SESSION['response'] = "Invalid Username or Password";
        $_SESSION['res_type'] = "danger";
        header("location: ../member");
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