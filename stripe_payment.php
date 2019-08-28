<?php  

	$card_number = $_REQUEST['card_number'];
    $card_exp_month = $_REQUEST['card_exp_month'];
    $card_exp_year = $_REQUEST['card_exp_year'];
    $card_cvv = $_REQUEST['card_cvv'];
    $product_name = $_REQUEST['product_name'];
    $p_price = $_REQUEST['p_price'];
    $price = $_REQUEST['price']*100;
    $price1 = $_REQUEST['price'];
    $user_id = $_REQUEST['user_id'];
    $email = '';
    if (isset($_REQUEST['email'])) {
    	$email = $_REQUEST['email'];
    }
    $json_for_stripe = '{"user_id":"'.$user_id.'","price":"'.$price1.'","product_name":"'.$product_name.'","p_price":"'.$p_price.'","email":"'.$email.'"}';
	
    $stripe_key = 'sk_test_Yy61RvMpVcKewcgFkL1tAFOi00QFM3BQ6I';

    $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://api.stripe.com/v1/tokens");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "card[number]=$card_number&card[exp_month]=$card_exp_month&card[exp_year]=$card_exp_year&card[cvc]=$card_cvv");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_USERPWD, "$stripe_key" . ":" . "");
	$headers = array();
	$headers[] = "Content-Type: application/x-www-form-urlencoded";
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	$result = curl_exec($ch);
	$result = json_decode($result);
	// var_dump($result);die();
	if (curl_errno($ch)) {
	    echo 'Error:' . curl_error($ch);
	    curl_close ($ch);
	    $_SESSION['payment_status'] = 'token_failed';
	    echo "token_failed";
	}
	elseif(isset($result->error)){
		if($result->error){
			$_SESSION['payment_status'] = 'token_failed';
	    	echo "token_failed";
		}
	}
	elseif($result->livemode == false){
		curl_close ($ch);
		$token = $result->id;

		$ch2 = curl_init();
		curl_setopt($ch2, CURLOPT_URL, "https://api.stripe.com/v1/charges");
		curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch2, CURLOPT_POSTFIELDS, "amount=$price&currency=usd&source=$token&description=$json_for_stripe");
		curl_setopt($ch2, CURLOPT_POST, 1);
		curl_setopt($ch2, CURLOPT_USERPWD, "$stripe_key" . ":" . "");
		$headers2 = array();
		$headers2[] = "Content-Type: application/x-www-form-urlencoded";
		curl_setopt($ch2, CURLOPT_HTTPHEADER, $headers2);

		$result2 = curl_exec($ch2);
		if (curl_errno($ch2)) {
		    echo 'Error:' . curl_error($ch2);
		    $_SESSION['payment_status'] = 'order_failed';
		    echo "order_failed";
		}
		else{

			// echo "Youer payment successfully";
			$to = "iqbal510hossain@gmail.com";
			$subject = "HTML email";

			$message="<html>
					<head>
						<title>HTML email</title>
					</head>
					<body>
						<p>Stripe buy system in youer message</p>
						<table style='border: 2px solid black;'>
							<tr style='border: 2px solid black;'>
								<th style='border: 2px solid black;'>Product_name</th>
								<th style='border: 2px solid black;'>p_price</th>
							</tr>
							<tr>
								<td style='border: 2px solid black;'>$product_name</td>
								<td style='border: 2px solid black;'>$p_price</td>
							</tr>
						</table>
					</body>
					</html>";

			// Always set content-type when sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

			// More headers
			$headers .= 'From: $email' . "\r\n";
			$headers .= 'Cc: $email' . "\r\n";

			if(!mail($to,$subject,$message,$headers)){
				echo "error";
			}

				echo "<h2 style='color:green;text' >Youer Stripe Payment successfully please check email<h2>";
				
			// if($mysqli->query($sql)){
			// 	$_SESSION['payment_status'] = 'done';
			// 	$_SESSION['product_id'] = $product_id;
			// 	$_SESSION['product_name'] = $product;
			// 	$_SESSION['product_price'] = $price1;
			// 	set_session_alert('success','Your payment successfully done.');
			// 	echo "Your payment successfully done.";
			// }
			// echo "true";

		}
		curl_close ($ch2);
	}
	elseif($result->livemode == false){
		echo "test_mode";
	}
	
?>