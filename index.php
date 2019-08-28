<?php
	session_start();
	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
		<style>
			body {
			margin: 0;
			}
			ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			width: 13%;
			background-color: #e0e0e0;
			position: fixed;
			height: 100%;
			overflow: auto;
			}
			li a {
			display: block;
			color: #000;
			padding: 8px 16px;
			text-decoration: none;
			}
			li a.active {
			background-color: #4CAF50;
			color: white;
			}
			li a:hover:not(.active) {
			background-color: #555;
			color: white;
			overflow: visible;
			}
			.container { margin-top: 30px; }
			.list-group-item { padding: 5px; border: 0px; }
			.price { font-size: 72px; }
			.currency {
			font-size:25px;
			position: relative;
			top: -30px;
			}
			.card { width: 350px; }
			.card:hover {
			-webkit-transform: scale(1.05);
			-moz-transform: scale(1.05);
			-ms-transform: scale(1.05);
			-o-transform: scale(1.05);
			transform: scale(1.05);
			-webkit-transition: all .3s ease-in-out;
			-moz-transition: all .3s ease-in-out;
			-ms-transition: all .3s ease-in-out;
			-o-transition: all .3s ease-in-out;
			transition: all .3s ease-in-out;
			}
			#sidenav {
			height: 100%;
			width: 15%;
			position: fixed;
			z-index: 1;
			top: 57px;
			left: 0;
			background-color: #17a2b8  ;
			overflow-x: hidden;
			border-top: 1px solid #F8F8FF;
			}
			#sidenav a {
			padding: 6px 8px 6px 16px;
			text-decoration: none;
			font-size: 20px;
			color: #37474f;
			display: block;
			}
			#sidenav a:hover {
			color: #1a237e;
			}
			.card-text{
			padding: 40px 30px 40px 30px;
			font-size: 25px;
			}
			@media screen and (max-height: 450px) {
			#sidenav {padding-top: 15px;}
			#sidenav a {font-size: 18px;}
			}
		</style>
		<body>
			<div class="bs-example">
				<nav class="navbar navbar-expand-md navbar-dark bg-info fixed-top">
					<a href="index.php" class="navbar-brand">Dashboard</a>
					<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarCollapse">
						<div class="navbar-nav ml-auto">
							<div class="dropdown">
								<button type="button" class="btn" data-toggle="dropdown" style="border-radius: 50%;">
								<?php echo $_SESSION['username']; ?>
								</button>
								<div class="dropdown-menu" style="min-width: 4rem; padding: 8px;border: none">
									<a href="index.php?logout='1'" >Logout</a>
								</div>
							</div>
						</div>
					</div>
				</nav>
			</div>
			<div class="bs-example">
				<nav class="navbar navbar-expand-md navbar-light bg-light">
					<a href="index.php" class="navbar-brand">Dashboard</a>
				</nav>
				<div id="sidenav">
					<a >Dashbord</a>
					<a href="customer.php">Create Customer</a>
					<a href="product.php">Create Product</a>
					<a href="invoice.php">Create Invoice</a>
					<a href="view.php">View Invoice</a>
					<a href="userview.php">User View Invoice</a>
				</div>
			</div>
			<div class="container text-center">
				<div class="row">
					<div class="col-md-3" style="margin-bottom: 20px">
						<div style="background-color: #CAE1F9;width:100%; height: 255px;" class="card">
							<a href="customer.php" class="card-text"><i class="fa fa-user-plus" style="font-size:75px;" aria-hidden="true"></i>
							<br>Create Customer</a>
						</div>
					</div>
					<div class="col-md-3">
						<div style="background-color: #CAE1F9;width:100%; height: 255px;" class="card">
							<a href="product.php"  class="card-text"><i class="fa fa-product-hunt" style="font-size:75px;"aria-hidden="true"></i>
							<br>Create Product</a>
						</div>
					</div>
					<div class="col-md-3">
						<div style="background-color: #CAE1F9;width:100%; height: 255px;" class="card">
							<a  href="invoice.php"  class="card-text"><i class="fa fa-plus-circle" style="font-size:84px;"  aria-hidden="true"></i>
							<br>Create Invoice</a>
						</div>
					</div>
					<div class="col-md-3">
						<div style="background-color: #CAE1F9;width:100%; height: 255px;" class="card">
							<a  href="view.php"  class="card-text"><i class="fa fa-file-archive-o" style="font-size:97px;"  aria-hidden="true"></i>
							<br>View Invoice</a>
						</div>
					</div>
					<div class="col-md-3">
						<div style="background-color: #CAE1F9;width:100%; height: 255px;" class="card">
							<a  href="userview.php"  class="card-text"><i class="fa fa-user-circle" style="font-size:98px;"  aria-hidden="true"></i>
							<br>User View Invoice</a>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center">
				<hr>
				<h2>Payment Methode</h2>
				</hr>
				<hr>
			</div>
			<div class="text-center">
				<button style="width: 28%;height: 110px;background: #3EA055;font-size: 28px; color: black;" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
				Stripe BuY NoW
				</button>
				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Strip Payment</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="stripe_payment.php" method="post">
									<div class="form-group">
										<input type="email" name="email" class="form-control" id="inputAddress" placeholder="Email" required>
									</div>
									<div class="form-row">
										<div class="form-group col-md-4">
											<input type="text" name="product_name" class="form-control" id="inputCity" placeholder="Product Name" required>
										</div>
										<div class="form-group col-md-4">
											<input type="text" name="p_price" class="form-control" id="inputCity" placeholder="Product_price" required>
										</div>
									</div>
									<div class="form-group">
										<input type="text" name="card_number" class="form-control" id="inputAddress2" placeholder="Card number" required>
									</div>
									<div class="form-row">
										<div class="form-group col-md-4">
											<input type="text" name="card_exp_month" class="form-control" id="inputCity" placeholder="MM" required>
										</div>
										<div class="form-group col-md-4">
											<input type="text" name="card_exp_year" class="form-control" id="inputCity" placeholder="YY" required>
										</div>
										<div class="form-group col-md-4">
											
											<input type="text" name="card_cvv" class="form-control" id="inputZip" placeholder="CVV" required>
										</div>
										
										<input type="hidden" id="custId" name="price" value="3487">
										<input type="hidden" id="custId" name="price" value="3487">
										<input type="hidden" id="custId" name="user_id" value="3487">
									</div>
									<div class="float-left">
										<button type="submit" class="btn btn-info">Submit</button>
									</div>
									
								</form>
							</div>
							<div class="modal-footer">
								<button  type="button" class="btn btn-link" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</div><br>
			<div class="text-center">
				<!-- Button trigger modal -->
				<button style="width: 28%;height: 110px;background: #EDE275;font-size: 28px; color: black;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
				PayPal Buy Now
				</button>
				<!-- Button trigger modal -->
				<!-- Modal -->
				<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLongTitle">Paypal Payment</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="checkout.php" method="post">
									<div class="form-group">
										<input type="text" name="product" class="form-control" id="inputAddress" placeholder="Product Name" required>
									</div>
									<div class="form-group">
										<input type="number" name="price" class="form-control" id="inputAddress" placeholder="Product_Price" required>
									</div>
									<div class="float-left">
										<button type="submit" class="btn btn-info">Submit</button>
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<footer style="width: 100%;margin-top: 10px;  background: #17a2b8; color: #37474f ; padding: 10px; text-align: center; font-size: 20px;">
				<p>AbuHanif(Iqbal) &copy; 2019</p>
			</footer>
			
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		</body>
	</html>