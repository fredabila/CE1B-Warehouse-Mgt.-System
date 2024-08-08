<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warehouse Management System</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="banner">
        <?php include 'include/header.php'; ?>
    </div>
    <div class="content">
        <h1>WAREHOUSE MANAGEMENT SYSTEM</h1>
        <P>The Smart Way to Manage Your Warehouse. <br>Today and Tomorrow.</P>
        <div>
            <button type="button"><span></span>RECEIVE SHIPMENT</button>
            <button type="button"><span></span>PICK AND PACK</button>
        </div>
    </div>






    <script>
        function dropdownmenu() {
            var x = document.getElementById("dropdownclick");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
</body>

</html>