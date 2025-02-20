<?php
// Enable error reporting
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
//ini_set('display_startup_errors', '1');

if (function_exists('opcache_reset')) {
    opcache_reset();
}


function hashString($inputString)
{
    return hash('sha256', $inputString);
}


function PostFbConversionNonPurchase($eventName)
{
    $data = array(
        "data" => array(
            array(
                "event_name" => $eventName,
                "event_time" => time(),
                "user_data" => array(
                    "client_ip_address" => $_SERVER['REMOTE_ADDR'],
                    "client_user_agent" => $_SERVER['HTTP_USER_AGENT'],
                    "fbc" => isset($_GET['fbclid']) ? 'fb.1.' . time() . '.' . $_GET['fbclid'] : null,
                    "fbp" => isset($_COOKIE['_fbp']) ? $_COOKIE['_fbp'] : null

                ),
                "action_source" => "website",
                //"event_id"=>12345,
                //"event_name"=>"TestEvent"
                //"event_source_url" => $fullURL,
            ),
        ),
        //"test_event_code"=>"TEST66976",
        "access_token" => "EAAHf1LnmayYBOxgUEpoUd9sESMZCOCiTTjVDemam7r0GH6Mea7zJySpdyZCXRLp93v9aILmo907yJJhVpExOfZCdqISR740mtmve2TD1UsosHPdklpfLOgmDZC0FrE9meU2psMPw3cw9tAeUplYT94C2tQwg8hAH9MVnQb7mzUPBCluf17syHdZAWXnMxXwZDZD",
    );

    _PostFbConversion($eventName, $data);
}

function PostFbConversionPurchase($eventName, $userData)
{
    
    $data = array(
        "data" => array(
            array(
                "event_name" => $eventName,
                "event_time" => time(),
                "user_data" => array(
                    "client_ip_address" => $_SERVER['REMOTE_ADDR'],
                    "client_user_agent" => $_SERVER['HTTP_USER_AGENT'],
                    "em" => $userData->email ?? '',
                    "ph" => $userData->phone ?? '',
                    "fn" => $userData->fname ?? '',
                    "ln" => $userData->lname ?? '',
                    "ct" => $userData->city ?? '',
                    "st" => $userData->state ?? '',
                    "country" => $userData->country ?? '',
                    "zp" => $userData->zipcode ?? '',
                    "fbc" => isset($_GET['fbclid']) ? 'fb.1.' . time() . '.' . $_GET['fbclid'] : null,
                    "fbp" => isset($_COOKIE['_fbp']) ? $_COOKIE['_fbp'] : null

                ),
                "custom_data" => array(
                    "currency" => "USD",
                    "value" => 9,
                ),
                "action_source" => "website",
              //  "event_id"=>12345,
                //"event_name"=>"TestEvent"
        //        //"event_source_url" => $fullURL,
            ),
        ),
       // "test_event_code"=>"TEST8673",
        "access_token" => "EAAHf1LnmayYBOxgUEpoUd9sESMZCOCiTTjVDemam7r0GH6Mea7zJySpdyZCXRLp93v9aILmo907yJJhVpExOfZCdqISR740mtmve2TD1UsosHPdklpfLOgmDZC0FrE9meU2psMPw3cw9tAeUplYT94C2tQwg8hAH9MVnQb7mzUPBCluf17syHdZAWXnMxXwZDZD",
    );

    _PostFbConversion($eventName, $data);
}

function _PostFbConversion($eventType, $data)
{
    try {
        //print_r($data);
        // Convert data to JSON
        $dataString = json_encode($data);

        // Initialize cURL
        $ch = curl_init('https://graph.facebook.com/v11.0/1912288939363093/events');

        // Set cURL options
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($dataString)
            )
        );

        // Execute cURL request
        $response = curl_exec($ch);
        //print_r($response);

        $data2 = json_encode($data);

        // Close cURL session
        curl_close($ch);
        

       
    } catch (Exception $ex) {

    }

}

?>