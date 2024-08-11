<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Your Order</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-light">
    <div class="banner">
        <?php include 'include/header.php'; ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="col m-auto">
                        <div class="card mt-5">
                            <div class="card-title">
                                <h3 class="bg-secondary text-white text-center py-3">Track Your shipping</h3>
                            </div>
                            <div class="card-body">
                                <form action="track_order.php?item_id=<?php echo $_GET['GetID']; ?>" method="post">
                                    <div class="form-group">
                                        <label for="tracking_number">Enter Your Tracking Number:</label>
                                        <input type="text" class="form-control mb-2" id="tracking_number"
                                            name="tracking_number" placeholder="Tracking Number" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Track Order</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>