<?php
require_once ("include/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ItemID = $_GET['item_id'];
    $TrackingNumber = $_POST['tracking_number'];
    $query = "SELECT * FROM shipping WHERE item_id = '$ItemID' AND tracking_number = '$TrackingNumber'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $shippingDetails = mysqli_fetch_assoc($result);
    } else {
        $error = "No records found for the provided tracking number.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Tracking Details</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-light">
    <div class="banner">
        <?php include 'include/header.php'; ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card p-5 shadow-lg rounded">
                        <h2 class="text-center mb-4">Order Tracking Details</h2>

                        <?php if (isset($error)): ?>
                            <div class="alert alert-danger text-center"><?php echo $error; ?></div>
                        <?php endif; ?>

                        <?php if (isset($shippingDetails)): ?>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Item Name</th>
                                        <td><?php echo $shippingDetails['item_name']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Recipient Name</th>
                                        <td><?php echo $shippingDetails['recipient_name']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Shipping Address</th>
                                        <td><?php echo $shippingDetails['shipping_address']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Contact Number</th>
                                        <td><?php echo $shippingDetails['contact_number']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email Address</th>
                                        <td><?php echo $shippingDetails['email_address']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Shipping Provider</th>
                                        <td><?php echo $shippingDetails['shipping_provider']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tracking Number</th>
                                        <td><?php echo $shippingDetails['tracking_number']; ?></td>
                                    </tr>
                                </table>
                            </div>
                        <?php endif; ?>

                        <a href="track.php?GetID=<?php echo $ItemID; ?>" class="btn btn-primary mt-3">Back to
                            Tracking Form</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>