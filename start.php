<?php
	require 'vendor/autoload.php';
	session_start();
	//note:liveserver uplode this project,site_url change then working tnank you;
	//note:liveserver uplode this project,use live paypal PAY_PAL_CLIENTID and PAY_PAL_SECRET use;
	define('SITE_URL', 'https://appgorithmlab.com/iqbal/');
			define('PAY_PAL_CLIENTID', 'AW8_dHo2d0gQ6_rxz2JJvA_z01ESSHq9z8kWNbhTyzq_YLx86uX2mFsI09rd9XMKFFvvsHMxl7vy8_WK');
			define('PAY_PAL_SECRET', 'EJrOmunCd6hY0nd_E3qvHWIAfZr1TwCRtHlfZTN2r46l0VtrodW-jBKHaVLszsphVj-WwNmNvAvtsLoW');
			$paypal = new \PayPal\Rest\ApiContext(
				new \PayPal\Auth\OAuthTokenCredential(
					PAY_PAL_CLIENTID,PAY_PAL_SECRET
				)
			);

			var_dump($paypal);
?>
