<?php
require_once('../include/connection.php');
session_start();
if (isset($_POST['submit'])) {
    if (empty($_POST['name']) || empty($_POST['username']) || empty($_POST['password'])) {
        echo "Please enter required details";
    } else {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $query = "INSERT INTO users (name, username, password) VALUES ('$name', '$username', '$password')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            header("Location: /dashboard.php");
            exit();
        } else {
            echo "Error signing up: " . mysqli_error($conn);
        }
    }
} else {
    header('Location: signup.html');
    exit();
}
?>
