<?php
// Set sandbox (test mode) to true/false.
$sandbox = FALSE;

// Set PayPal API version and credentials.
$api_version = '85.0';
$api_endpoint = $sandbox ? 'https://api-3t.sandbox.paypal.com/nvp' : 'https://api-3t.paypal.com/nvp';
$api_username = $sandbox ? 'baislavimal_api1.gmail.com' : 'payment_api1.beautco.com';
$api_password = $sandbox ? '1367647630' : 'GM4VKEJ6CD7ECXNH';
$api_signature = $sandbox ? 'AFcWxV21C7fd0v3bYYYRCpSSRl31APVhmvO4C1Qf3wF7MKBJrOA5UCuF' : 'AjwDmCss4wwtAqiWMIYjCSVofY.ZAjgc-4YOtGhgM.6E2cTFFg0v36-0';

