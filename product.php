<?php
include('db.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$product_name=$_POST['product_name'];
$category=$_POST['category'];
$description=$_POST['description'];
$sql="INSERT INTO product (product_name, category, description) VALUES ('$product_name','$category', '$description')";
if ($db->query($sql) === TRUE) {
echo "<p class='text-success'>Create successfully</p>";
} else {
echo "Error: " . $sql . "<br>" . $db->error;
}
$db->close();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <a href="index.php" class="btn btn-info">Back</a>
      <h2 style="text-align: center;color: green;">Create Product</h2>
      <form method="post">
        <div class="form-group">
          <label for="email">Product name:</label>
          <input type="text" class="form-control"  placeholder="Product name" name="product_name" required>
        </div>
        <div class="form-group">
          <label for="email">Category:</label>
          <input type="text" class="form-control" id="address" placeholder="Category" name="category" required>
        </div>
        <div class="form-group">
          <label for="email">Description:</label>
          <textarea rows="4" cols="50" type="color" class="form-control" id="email" placeholder="Description" name="description" required></textarea>
        </div>
        
        <button style="" type="submit" class="btn btn-success">Submit</button>
      </form>