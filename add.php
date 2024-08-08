<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="author" content="Fredrick Abila" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <script src="js/bootstrap.js"></script>
  <title>Warehouse Management System - Add Item</title>
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
              <h3 class="bg-info text-white text-center py-3">
                Add New Item
              </h3>
            </div>
            <div class="card-body">
              <form action="functions/add.php" method="post">
                <input type="text" class="form-control mb-2" placeholder="Item Name" name="item_name" required />
                <input type="number" class="form-control mb-2" placeholder="Quantity" name="quantity" required />
                <input type="text" class="form-control mb-2" placeholder="Category" name="category" required />
                <textarea class="form-control mb-2" placeholder="Description" name="description" required></textarea>
                <button class="btn btn-info" name="submit">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>