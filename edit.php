<?php
require_once("include/connection.php");
$ItemID = $_GET['GetID'];
$query = "SELECT * FROM items WHERE item_id = '" . $ItemID . "'";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $ItemID = $row['item_id'];
    $ItemName = $row['item_name'];
    $Quantity = $row['quantity'];
    $Category = $row['category'];
    $Description = $row['description'];
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
    <title>Warehouse Management System - Edit Item</title>
    <link rel="icon" type="image/x-icon" href="" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body class="bg-light">
    <div class="banner">
      <div class="navbar">
        <img src="images/image2.png" class="logo" />
        <ul id="dropdownclick" class="topnav">
          <li><a href="#">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li><a href="login.html">Login</a></li>
          <li class="dropdown">
            <a href="javascript:void(0);" onclick="dropdownmenu()">&#9776;</a>
          </li>
        </ul>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto">
            <div class="card mt-5">
              <div class="card-title">
                <h3 class="bg-info text-white text-center py-3">
                  Edit Item
                </h3>
              </div>
              <div class="card-body">
                <form action="functions/update.php?ID=<?php echo $ItemID ?>" method="post">
                  <input
                    type="text"
                    class="form-control mb-2"
                    placeholder="Item Name"
                    name="item_name"
                    value="<?php echo $ItemName; ?>"
                    required
                  />
                  <input
                    type="number"
                    class="form-control mb-2"
                    placeholder="Quantity"
                    name="quantity"
                    value="<?php echo $Quantity; ?>"
                    required
                  />
                  <input
                    type="text"
                    class="form-control mb-2"
                    placeholder="Category"
                    name="category"
                    value="<?php echo $Category; ?>"
                    required
                  />
                  <textarea
                    class="form-control mb-2"
                    placeholder="Description"
                    name="description"
                    required
                  ><?php echo $Description; ?></textarea>
                  <button class="btn btn-info" name="update">Update</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
