<?php

if (function_exists('opcache_reset')) {
    opcache_reset();
}

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

// Include the configuration file  
//include 'config.php'; 

define('PAYPAL_SANDBOX', FALSE); //TRUE=Sandbox | FALSE=Production 
define('PAYPAL_SANDBOX_CLIENT_ID', 'Adhfl3fJc7gOXxkUTAtTrTp528VOS0t8phs-eXMR_kUONU4LTC3KOeL9pmVjrhJX-bCm98mVPIx6vRL4'); 
define('PAYPAL_SANDBOX_CLIENT_SECRET', 'EE1-BONXp1Q3bii1V1swkT5IQA9xkb8BGJDRPqkVlcaz5iD-WqA_AwC0llGPJ7B_mncmp3vuyQY69o04'); 
define('PAYPAL_SANDBOX_URL', 'https://api.sandbox.paypal.com'); 


define('PAYPAL_PROD_CLIENT_ID', 'AWpw8_C93g28a_mpq76N_emSySJp7SvKJUB7kSHE7QjGJYyUStieN8dYoHWPDOb57RL6rE0cGLQh8Mx0'); 
define('PAYPAL_PROD_CLIENT_SECRET', 'EAK8Z08f055nEy_aE5ivaZvRp8CGvMWiER136vibYj23otGPWiZxx4JJXq1Py0u3_kvnQUlguG706cqp'); 
define('PAYPAL_PROD_URL', 'https://api-m.paypal.com'); 



 
// Include the database connection file  
//include 'dbConnect.php'; 
 


/**
 * Generate an OAuth 2.0 access token for authenticating with PayPal REST APIs.
 * @see https://developer.paypal.com/api/rest/authentication/
 */
function generateAccessToken() {
    try {
        $paypalClientId=PAYPAL_SANDBOX?PAYPAL_SANDBOX_CLIENT_ID:PAYPAL_PROD_CLIENT_ID;
$paypalClientSecret=PAYPAL_SANDBOX?PAYPAL_SANDBOX_CLIENT_SECRET:PAYPAL_PROD_CLIENT_SECRET;
$paypalUrl=PAYPAL_SANDBOX?PAYPAL_SANDBOX_URL:PAYPAL_PROD_URL;


        if (!$paypalClientId || !$paypalClientSecret) {
            throw new Exception("MISSING_API_CREDENTIALS");
        }

        $auth = base64_encode($paypalClientId . ":" . $paypalClientSecret);
        $url = $paypalUrl . '/v1/oauth2/token';

        $headers = [
            'Authorization: Basic ' . $auth,
            'Content-Type: application/x-www-form-urlencoded'
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'grant_type=client_credentials');
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            throw new Exception(curl_error($ch));
        }
        curl_close($ch);

        $data = json_decode($response, true);
        if (isset($data['error'])) {
            throw new Exception($data['error_description']);
        }

        return $data['access_token'];
    } catch (Exception $e) {
        error_log("Failed to generate Access Token: " . $e->getMessage());
        return null;
    }
}

/**
 * Create an order to start the transaction.
 * @see https://developer.paypal.com/docs/api/orders/v2/#orders_create
 */
function createOrder($cart) {
    $paypalClientId=PAYPAL_SANDBOX?PAYPAL_SANDBOX_CLIENT_ID:PAYPAL_PROD_CLIENT_ID;
$paypalClientSecret=PAYPAL_SANDBOX?PAYPAL_SANDBOX_CLIENT_SECRET:PAYPAL_PROD_CLIENT_SECRET;
$paypalUrl=PAYPAL_SANDBOX?PAYPAL_SANDBOX_URL:PAYPAL_PROD_URL;


    $accessToken = generateAccessToken();
    if (!$accessToken) {
        return [
            'error' => 'Failed to generate access token'
        ];
    }

    $url = $paypalUrl . '/v2/checkout/orders';
    $payload = json_encode([
        'intent' => 'CAPTURE',
        'purchase_units' => [
            [
                'amount' => [
                    'currency_code' => "USD",
                    'value' => "9"
                ]
            ]
        ]
    ]);

    $headers = [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $accessToken
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if (curl_errno($ch)) {
        throw new Exception(curl_error($ch));
    }
    curl_close($ch);

    return handleResponse($response, $httpStatusCode);
}

/**
 * Capture payment for the created order to complete the transaction.
 * @see https://developer.paypal.com/docs/api/orders/v2/#orders_capture
 */
function captureOrder($orderID) {
    $accessToken = generateAccessToken();
    if (!$accessToken) {
        return [
            'error' => 'Failed to generate access token'
        ];
    }

    $url = $paypalUrl . "/v2/checkout/orders/{$orderID}/capture";

    $headers = [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $accessToken
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if (curl_errno($ch)) {
        throw new Exception(curl_error($ch));
    }
    curl_close($ch);
    
    $jsonResponse = json_decode($response, true);
    //print_r($jsonResponse);
    if($jsonResponse['status']=="COMPLETED"){
     
      $orderId = $jsonResponse['id'];
      
      include 'dbConnect.php'; 
 
      
       
        $itemNumber = '123';
        $itemName = 'printable';
        $itemPrice = 1.00;
        $itemPriceCurrency = 'usd';
        $paymentStatus = 'COMPLETED';
        
        $sqlQ = "INSERT INTO transactions (transaction_id, item_number, item_name, item_price, item_price_currency, payment_status) VALUES (?, ?, ?, ?, ?, ?)"; 
        $stmt = $db->prepare($sqlQ);
        
        if ($stmt === false) {
            die('Error preparing the statement: ' . $db->error);
        }
        
        $stmt->bind_param("sssdss", $orderID, $itemNumber, $itemName, $itemPriceCurrency, $itemPrice, $paymentStatus);
    
        $insert = $stmt->execute(); 
        
        $jsonResponse = json_decode($response, true);
        $jsonResponse['id']=base64_encode($orderID);
        $response = json_encode($jsonResponse);
        //print $insert;
                
      //exit(0);
    }
   
    //$response  = "{ \"id\" : \"" . base64_encode($orderID) . "\"}"; 
    //echo $response;
    return handleResponse($response, $httpStatusCode);
}

function handleResponse($response, $httpStatusCode) {
    try {
        $jsonResponse = json_decode($response, true);
        return [
            'jsonResponse' => $jsonResponse,
            'httpStatusCode' => $httpStatusCode
        ];
    } catch (Exception $e) {
        throw new Exception($response);
    }
}


// Example of usage in an API endpoint
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['act'] == 'orders') {
    header('Content-Type: application/json');
    $input = json_decode(file_get_contents('php://input'), true);
    $cart = $input['cart'] ?? null;

    if (!$cart) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing cart information']);
        exit;
    }

    try {
        $result = createOrder($cart);
        http_response_code($result['httpStatusCode']);
        echo json_encode($result['jsonResponse']);
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['error' => 'Failed to create order', 'details' => $e->getMessage()]);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['act'] == 'capture') {
    header('Content-Type: application/json');
    $orderID = $_GET['orderid'];

    try {
        $result = captureOrder($orderID);
        http_response_code($result['httpStatusCode']);
        echo json_encode($result['jsonResponse']);
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['error' => 'Failed to capture order', 'details' => $e->getMessage()]);
    }
}
?>
