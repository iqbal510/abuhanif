<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		
	</head>
	<body>
		<a href="index.php" class="btn btn-info">Back</a>
		<div class="cotainer text-center">
			<h2>Invoice</h2>
		</div>
		<div class="container">
			<table class="table table-hover">
				<thead style="background: #616D7E;color:white;">
					<tr>
						<th>Adddress</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody>
					<?php
					include('db.php');
					$result = mysqli_query($db,"SELECT * FROM customer_name");
					while($product = mysqli_fetch_array($result)){
						$address = $product['address'];
						$email = $product['email'];
					?>
					<tr>
						<td><?php echo $address ?></td>
						<td><?php echo $email ?></td>
					</tr>
					<?php } ?>
				</div>
				<div  class="conatainer">
					<table  class="table table-hover">
						<thead style="background: #616D7E;color:white;">
							<tr>
								<th>ItemCode</th>
								<th>Itemdescription</th>
								<th>Unit Price</th>
								<th>Quntity</th>
								<th>Discount %</th>
								<th>Total</th>
							</tr>
						</thead>
						<tbody>
							
							<?php
							include('db.php');
							$result = mysqli_query($db,"SELECT * FROM invoice_item");
							while($product = mysqli_fetch_array($result)){
								$item_code = $product['item_code'];
								$description = $product['description'];
							
								$unite_price = $product['unite_price'];
								$quntity = $product['quntity'];
								$discount = $product['discount'];
								$total = $product['total'];
							?>
							<tr>
								<td><?php echo $item_code ?></td>
								<td><?php echo $description ?></td>
								<td><?php echo $unite_price ?></td>
								<td><?php echo $quntity ?></td>
								<td><?php echo $discount ?></td>
								<td><?php echo $total ?></td>
								
							</tr>
							<?php } ?>
							
							
							
						</tbody>
					</table>
				</div>
				
				<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
				
			</body>
		</html>