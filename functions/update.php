<?php
require_once("../include/connection.php");

if (isset($_POST['update'])) {
    $ItemID = $_GET['ID'];
    $ItemName = $_POST["item_name"];
    $Quantity = $_POST["quantity"];
    $Category = $_POST["category"];
    $Description = $_POST["description"];

    $query = "UPDATE items SET item_name='$ItemName', quantity='$Quantity', category='$Category', description='$Description' WHERE item_id='$ItemID'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: /dashboard.php");  
        exit();
    } else {
        echo "Error updating item: " . mysqli_error($conn);
    }
} else {
    header("Location: /dashboard.php");  
    exit();
}
?>
