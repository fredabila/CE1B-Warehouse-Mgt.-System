<?php
require_once("include/connection.php");

// Get the ItemID from the URL
$ItemID = $_GET['GetID'];
$query = "SELECT * FROM items WHERE item_id = '" . $ItemID . "'";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $ItemID = $row['item_id'];
    $ItemName = $row['item_name'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="author" content="Fredrick Abila" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <script src="js/bootstrap.js"></script>
    <title>Warehouse Management System - Ship Item</title>
    <link rel="icon" type="image/x-icon" href="" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body class="bg-light">
    <div class="banner">
        <?php include 'include/header.php'; ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3">
                                Ship Item
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="functions/ship.php?ID=<?php echo $ItemID ?>" method="post">
                                <input type="text" class="form-control mb-2" placeholder="Item Name" name="item_name"
                                    value="<?php echo $ItemName; ?>" readonly />
                                <input type="text" class="form-control mb-2" placeholder="Recipient Name"
                                    name="recipient_name" required />
                                <input type="text" class="form-control mb-2" placeholder="Shipping Address"
                                    name="shipping_address" required />
                                <input type="text" class="form-control mb-2" placeholder="Contact Number"
                                    name="contact_number" required />
                                <input type="email" class="form-control mb-2" placeholder="Email Address"
                                    name="email_address" required />
                                
                                <!-- Dropdown for Shipping Provider -->
                                <select class="form-control mb-2" name="shipping_provider" required>
                                    <option value="" disabled selected>Select Shipping Provider</option>
                                    <option value="DHL">DHL</option>
                                    <option value="FedEx">FedEx</option>
                                    <option value="UPS">UPS</option>
                                    <option value="TNT">TNT</option>
                                    <option value="USPS">USPS</option>
                                </select>

                                <button class="btn btn-primary" name="ship">Ship Item</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
