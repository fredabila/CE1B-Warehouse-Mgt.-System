<?php
require_once ("include/connection.php");
$query = "SELECT * FROM items";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="author" content="Fredrick Abila">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <script src="js/bootstrap.js"></script>
    <title>Inventory Management</title>
    <link rel="icon" type="image/x-icon" href="">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-light">
    <div class="banner">
        <?php include 'include/header.php'; ?>
        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-secondary text-white text-center py-3">Inventory Management</h3>
                        </div>
                        <div class="card-body">
                            <p><a class="btn btn-info text-white" href="add.php">+ Add New Item</a></p>
                            <table class="table table-bordered">
                                <tr>
                                    <td>Item ID</td>
                                    <td>Item Name</td>
                                    <td>Quantity</td>
                                    <td>Category</td>
                                    <td>Description</td>
                                    <td>Action</td>
                                </tr>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $ItemID = $row['item_id'];
                                    $ItemName = $row['item_name'];
                                    $Quantity = $row['quantity'];
                                    $Category = $row['category'];
                                    $Description = $row['description'];
                                    ?>
                                    <tr>
                                        <td><?php echo $ItemID; ?></td>
                                        <td><?php echo $ItemName; ?></td>
                                        <td><?php echo $Quantity; ?></td>
                                        <td><?php echo $Category; ?></td>
                                        <td><?php echo $Description; ?></td>
                                        <td>
                                            <a class="btn btn-info text-white"
                                                href="edit.php?GetID=<?php echo $ItemID; ?>">Edit</a>
                                            |
                                            <a class="btn btn-danger text-white"
                                                href="functions/delete.php?Del=<?php echo $ItemID; ?>">Delete</a>
                                            |
                                            <a class="btn btn-info text-white"
                                                href="ship.php?GetID=<?php echo $ItemID; ?>">Ship</a>
                                            |
                                            <a class="btn btn-info text-white"
                                                href="track.php?GetID=<?php echo $ItemID; ?>">Track Shipping</a>

                                        </td>
                                    </tr>
                                    <?php
                                } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>