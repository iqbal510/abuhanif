<?php
include('db.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$cname=$_POST['cname'];
$address=$_POST['address'];
$email=$_POST['email'];
$sql="insert into customer_name (cname, address, email) values ('$cname','$address', '$email')";
if ($db->query($sql) === true) {
echo "<p class='text-success'>create successfully</p>";
} else {
echo "error: " . $sql . "<br>" . $db->error;
}
$db->close();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>customer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    
    <div class="container">
      <a href="index.php" class="btn btn-info">Back</a>
      <h2 style="text-align: center;color: green;">create customer</h2>
      <form method="post">
        <div class="form-group">
          <label for="email">customer name:</label>
          <input type="text" class="form-control"  placeholder="customer name" name="cname" required>
        </div>
        <div class="form-group">
          <label for="email">address:</label>
          <input type="text" class="form-control" id="address" placeholder="address" name="address" required>
        </div>
        <div class="form-group">
          <label for="email">email:</label>
          <input type="email" class="form-control" id="email" placeholder="enter email" name="email" required>
        </div>
        
        <button style="" type="submit" class="btn btn-success">submit</button>
      </form>
    </div>
  </body>
</html>