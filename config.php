<?php
require('stripe-php-master/init.php');

$publishablekey="pk_test_51LSKqaSFALW8eAIWgnmULtlGmb8YWfKULNxSUtMmxutuxUFcKHc1y3JupJXW5A7qPwJalPpxTWZzjesRtyiUqkAL00RRTNdUAj";
$secretkey="sk_test_51LSKqaSFALW8eAIWfE3heiOcz1rrNiEGeF9cMhPhT337l35NZW0xjHOg6Woy1YITnmZT37eX4dEdqHVtwOZ81CLu00uC2VdPI8";

\Stripe\Stripe::setApiKey($secretkey);
?>