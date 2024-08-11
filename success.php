<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipment Success</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="banner">
        <?php include 'include/header.php'; ?>
        <div class="text-center p-5 shadow-lg rounded" style="background-color: #f8f9fa;">
            <h1 class="display-4 text-success">Success!</h1>
            <p class="lead">Your item has been successfully shipped.</p>
            <?php if (isset($_GET['tracking_number'])): ?>
                <p>Your Tracking Number: <strong><?php echo $_GET['tracking_number']; ?></strong></p>
            <?php endif; ?>
            <a href="index.php" class="btn btn-primary mt-4">Go Back to Home</a>
        </div>
    </div>
</body>

</html>