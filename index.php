<?php
require('config.php');
?>
<!-- <script src="https://js.stripe.com/v3/"></script> -->
<form action="submit.php" method="post">
	<script src="https://checkout.stripe.com/checkout.js" class="stripe-button" 
	data-key="<?php echo $publishablekey?>"
	data-amount="500*100"
	data-name="E-commerce"
	data-description="pay"
	data-image=""
	data-currency="$"
	data-email="yogikhutela.yk@gmail.com"
	data-locale="auto">
	</script>
	
</form>