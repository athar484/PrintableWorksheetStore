<?php 

if (function_exists('opcache_reset')) {
    opcache_reset();
}



// Product Details 
$itemNumber = "DP12345"; 
$itemName = "Primary Bundle"; 
$itemPrice = 15.00;  
$currency = "USD";  
 
/* PayPal REST API configuration 
 * You can generate API credentials from the PayPal developer panel. 
 * See your keys here: https://developer.paypal.com/dashboard/ 
 */ 
define('PAYPAL_SANDBOX', FALSE); //TRUE=Sandbox | FALSE=Production 
define('PAYPAL_SANDBOX_CLIENT_ID', 'Adhfl3fJc7gOXxkUTAtTrTp528VOS0t8phs-eXMR_kUONU4LTC3KOeL9pmVjrhJX-bCm98mVPIx6vRL4'); 
define('PAYPAL_SANDBOX_CLIENT_SECRET', 'EE1-BONXp1Q3bii1V1swkT5IQA9xkb8BGJDRPqkVlcaz5iD-WqA_AwC0llGPJ7B_mncmp3vuyQY69o04'); 
define('PAYPAL_SANDBOX_URL', 'https://api.sandbox.paypal.com'); 


define('PAYPAL_PROD_CLIENT_ID', 'AWpw8_C93g28a_mpq76N_emSySJp7SvKJUB7kSHE7QjGJYyUStieN8dYoHWPDOb57RL6rE0cGLQh8Mx0'); 
define('PAYPAL_PROD_CLIENT_SECRET', 'EAK8Z08f055nEy_aE5ivaZvRp8CGvMWiER136vibYj23otGPWiZxx4JJXq1Py0u3_kvnQUlguG706cqp'); 
define('PAYPAL_PROD_URL', 'https://api.paypal.com'); 
  
// Database configuration  
define('DB_HOST', 'server106.orangehost.com.:3306');  
define('DB_USERNAME', 'interact_usr');  
define('DB_PASSWORD', 'ppj)&[y15U(M');  
define('DB_NAME', 'interact_db'); 


 
?>
