<?php
require_once 'library/config.php';
require_once 'library/cart-functions.php';
require_once 'library/checkout-functions.php';
require_once 'library/login-functions.php';

if (isCartEmpty()) {
	// the shopping cart is still empty
	// so checkout is not allowed
	header('Location: cart.php');
} else if (isset($_GET['step']) && (int)$_GET['step'] > 0 && (int)$_GET['step'] <= 3) {
	$step = (int)$_GET['step'];

	$includeFile = '';
	if ($step == 1) {
            $_SESSION['normal_login_return_url'] = $_SERVER['REQUEST_URI'];
            us_checkUser();
		$includeFile = 'shippingAndPaymentInfo.php';
		$pageTitle   = 'Checkout - Step 1 of 2';
	} else if ($step == 2) {
            $_SESSION['normal_login_return_url'] = $_SERVER['REQUEST_URI'];
            us_checkUser();
		$includeFile = 'checkoutConfirmation.php';
		$pageTitle   = 'Checkout - Step 2 of 2';
	} else if ($step == 3) {
            $_SESSION['normal_login_return_url'] = $_SERVER['REQUEST_URI'];
            us_checkUser();
		$orderId     = saveOrder();
		$orderAmount = getOrderAmount($orderId);
		
		$_SESSION['orderId'] = $orderId;
		
		// our next action depends on the payment method
		// if the payment method is COD then show the 
		// success page but when paypal is selected
		// send the order details to paypal
		if ($_POST['hidPaymentMethod'] == 'cod') {
			header('Location: success.php');
			exit;
		} else {
			$includeFile = 'paypal/payment.php';	
		}
	}
} else {
	// missing or invalid step number, just redirect
	header('Location: index.php');
}

require_once 'include/header.php';
?>
<body style="background: white url(images/templatemo_body_checkout.png) repeat-x top;">
<div id="templatemo_wrapper">
<div id="templatemo_header_bar">
            <div id="templatemo_wrapper">
            <div id="header"><div class="right"></div>
            
                <h1><a href="<?php echo $_SERVER['PHP_SELF'];?>">
                        <img src="images/templatemo_logo.png" alt="Site Title" height="42px"/>
                    <span>Shops at your doorstep</span>
                </a></h1>
            </div>
</div>
</div>
<script language="JavaScript" type="text/javascript" src="library/checkout.js"></script>
<?php
require_once "include/$includeFile";
require_once 'include/footer.php';
?>