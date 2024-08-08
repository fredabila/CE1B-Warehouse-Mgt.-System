<?php
require_once ("../include/connection.php");
session_start();
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        echo "Please fill in your username and password";
    } else {
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $_POST['username']);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result) {
            $username = $_POST['username'];
            $_SESSION['username'] = $username;
            $user = mysqli_fetch_assoc($result);
            if ($user && password_verify($_POST['password'], $user['password'])) {
                header('Location: /dashboard.php');
                exit();
            } else {
                echo "Wrong credentials. Please register.";
            }
        } else {
            echo "Query failed: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    }
}
?>