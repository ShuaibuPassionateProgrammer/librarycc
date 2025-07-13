<?php
// Universal authentication check for both librarian and member dashboards
session_start();

if (!isset($_SESSION['auth'])) {
    $_SESSION['response'] = "Access denied! Please log in to access this page.";
    $_SESSION['res_type'] = "warning";
    // Redirect to the correct login page based on directory
    $currentPath = dirname($_SERVER['PHP_SELF']);
    if (strpos($currentPath, 'librarian') !== false) {
        header("Location: ../librarian/index.php");
    } elseif (strpos($currentPath, 'member') !== false) {
        header("Location: ../member/index.php");
    } else {
        header("Location: /index.php");
    }
    exit(0);
}
// Optionally, you can add more fine-grained role checks here if needed.
