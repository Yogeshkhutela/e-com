<?php
require('config.php');
?>
<form action="submit.php" method="post">
	<script>
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishableKey?>"
		data-amount="1000"
		data-name="Programming for emall"
		data-description="ecommerce site"
		data-image=""
		data-currency="inr"
		data-email="" 	
	</script>

</form>