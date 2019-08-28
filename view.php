<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		
	</head>
	<body>
		<div class="cotanier">
			<a href="index.php" class="btn btn-info">Back</a>
			
			<table class="table table-hover">
				<thead>
					<tr style="background: #267d88;">
						<th>Invoice</th>
						<th>Customer</th>
						<th>Email</th>
						<th>Date</th>
						<th>Total</th>
						<th>Currency</th>
					</tr>
				</thead>
				<tbody>
					
					<?php
					include('db.php');
					$result = mysqli_query($db,"SELECT * FROM  invoice_item INNER JOIN customer_name on invoice_item.id = customer_name.id ");
					while($product = mysqli_fetch_array($result)){
						
						$id = $product['id'];
						$customer = $product['customer'];
						$email = $product['email'];
						$date = $product['date'];
						$total = $product['total'];
						$currency = $product['currency'];
					?>
					<tr>
						<td><?php echo $id ?></td>
						<td><?php echo $customer ?></td>
						<td><?php echo $email ?></td>
						<td><?php echo $date ?></td>
						<td><?php echo $total ?></td>
						<td><?php echo $currency ?></td>
						
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