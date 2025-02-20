<?php 

// Include the configuration file  
require_once 'config.php'; 
  
// Include the database connection file  
require_once 'dbConnect.php';  
require_once 'fb.php'; 
 
$payment_ref_id = $statusMsg = ''; 
$status = 'error'; 
 
// Check whether the payment ID is not empty 
if(!empty($_GET['checkout_ref_id'])){ 
    $payment_txn_id  = base64_decode($_GET['checkout_ref_id']); 
     
    // Fetch transaction data from the database 
    $sqlQ = "SELECT id,payer_id,payer_name,payer_email,payer_country,order_id,transaction_id,paid_amount,paid_amount_currency,payment_source,payment_status,created,fbEventPosted FROM transactions WHERE transaction_id = ?"; 
    $stmt = $db->prepare($sqlQ);   
    $stmt->bind_param("s", $payment_txn_id); 
    $stmt->execute(); 
    $stmt->store_result();  
 
    if($stmt->num_rows > 0){ 
        // Get transaction details 
        $stmt->bind_result($payment_ref_id, $payer_id, $payer_name, $payer_email, $payer_country, $order_id, $transaction_id, $paid_amount, $paid_amount_currency, $payment_source, $payment_status, $created,$fbEventPosted); 
        $stmt->fetch(); 
        
        $userData = new stdClass();
		$userData->email = hashString($payer_email);
		$userData->phone = "";
		$userData->fname = hashString($payer_name);
		$userData->lname = hashString($payer_name);
		$userData->city = "";
		$userData->state = "";
		$userData->country = hashString($payer_country);
		$userData->zipcode = "";
		
		if($fbEventPosted==0){
		    PostFbConversionPurchase('Purchase', $userData);
		    $db->query('update transactions set fbEventPosted=1 where id = '.$payment_ref_id);
		}
        
         
        $status = 'success'; 
        //$statusMsg = 'Your Payment has been Successful!'; 
    }else{ 
        $statusMsg = "Transaction has been failed!"; 
    } 
}else{ 
    header("Location: index.php"); 
     exit; 
}  

echo $statusMsg;

?>


<?php if(!empty($payment_ref_id)){ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #4CAF50;
        }
        p {
            font-size: 18px;
            color: #555;
        }
        .download-link {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #4CAF50;
            text-decoration: none;
            border-radius: 5px;
        }
        .download-link:hover {
            background-color: #45a049;
        }
    </style>
    
    <?php
include 'header.php'
?>

</head>
<body>
    <div class="container">
        <h1>Thank You for Your Purchase!</h1>
        <p>Your transaction was successful. We appreciate your business!</p>
        <p>You can download your file by clicking the link below:</p>
        <a href="https://drive.google.com/drive/folders/1JNwuFsj81OlAwQvDZOLPL3YNyQUAGWti?usp=drive_link" class="download-link" download>Download Your File</a>
    </div>
    
    <?php if($fbEventPosted==0){ ?>
    <script>
        fbq('track', 'Purchase', {currency: "USD", value: 9});
    </script>
    <?php } ?>
</body>
</html>

<!--    <h1 class="<?php echo $status; ?>"><?php echo $statusMsg; ?></h1>
    
    <h4>Payment Information</h4>
    <p><b>Reference Number:</b> <?php echo $payment_ref_id; ?></p>
    <p><b>Order ID:</b> <?php echo $order_id; ?></p>
    <p><b>Transaction ID:</b> <?php echo $transaction_id; ?></p>
    <p><b>Paid Amount:</b> <?php echo $paid_amount.' '.$paid_amount_currency; ?></p>
    <p><b>Payment Status:</b> <?php echo $payment_status; ?></p>
    <p><b>Date:</b> <?php echo $created; ?></p>
    
    <h4>Payer Information</h4>
    <p><b>ID:</b> <?php echo $payer_id; ?></p>
    <p><b>Name:</b> <?php echo $payer_name; ?></p>
    <p><b>Email:</b> <?php echo $payer_email; ?></p>
    <p><b>Country:</b> <?php echo $payer_country; ?></p>
    
    <h4>Product Information</h4>
    <p><b>Name:</b> <?php echo $itemName; ?></p>
    <p><b>Price:</b> <?php echo $itemPrice.' '.$currency; ?></p> -->
    
<?php }else{ ?>
    <h1 class="error">Your Payment been failed!</h1>
    <p class="error"><?php echo $statusMsg; ?></p>
<?php }?>