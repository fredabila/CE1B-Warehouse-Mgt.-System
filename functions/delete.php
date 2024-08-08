<?php
require_once("../include/connection.php");

if (isset($_GET['Del'])) {
    $ItemID = $_GET['Del'];
    $query = "DELETE FROM items WHERE item_id = '" . $ItemID . "'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: /dashboard.php");  // Redirect to the root-level dashboard.php
        exit();
    } else {
        echo "Error deleting item: " . mysqli_error($conn);
    }
} else {
    header("Location: /dashboard.php");  // Redirect to the root-level dashboard.php
    exit();
}
?>
