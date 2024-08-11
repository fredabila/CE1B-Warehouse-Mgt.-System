<?php
require_once ("../include/connection.php");

if (isset($_POST['ship'])) {
    // Get the item ID from the URL
    $ItemID = $_GET['ID'];

    // Get the form data
    $ItemName = $_POST['item_name'];
    $RecipientName = $_POST['recipient_name'];
    $ShippingAddress = $_POST['shipping_address'];
    $ContactNumber = $_POST['contact_number'];
    $EmailAddress = $_POST['email_address'];
    $ShippingProvider = $_POST['shipping_provider'];

    // Generate a random tracking number
    $TrackingNumber = 'TRK' . strtoupper(substr(md5(time()), 0, 10));

    // Insert the shipping details into the database
    $query = "INSERT INTO shipping (item_id, item_name, recipient_name, shipping_address, contact_number, email_address, shipping_provider, tracking_number) 
              VALUES ('$ItemID', '$ItemName', '$RecipientName', '$ShippingAddress', '$ContactNumber', '$EmailAddress', '$ShippingProvider', '$TrackingNumber')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        // Redirect to a success page with the tracking number
        header("Location: ../success.php?tracking_number=" . $TrackingNumber);
    } else {
        // Handle the error if the query fails
        echo "Failed to ship the item. Please try again.";
    }
}
?>
