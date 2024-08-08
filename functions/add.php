<?php
require_once('../include/connection.php');

if (isset($_POST['submit'])) {
    if (empty($_POST['item_name']) || empty($_POST['quantity']) || empty($_POST['category']) || empty($_POST['description'])) {
        echo "Please fill in all the fields.";
    } else {
        $itemName = $_POST['item_name'];
        $quantity = $_POST['quantity'];
        $category = $_POST['category'];
        $description = $_POST['description'];

        $query = "INSERT INTO items (item_name, quantity, category, description) VALUES ('$itemName', '$quantity', '$category', '$description')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            header("Location: /dashboard.php");
            exit();
        } else {
            echo "There is an error in your query statement. Please check and try again: " . mysqli_error($conn);
        }
    }
} else {
    header("Location: index.html");
    exit();
}
?>
