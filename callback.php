<?php
session_start();


require_once 'google-api-php-client/vendor/autoload.php';



// Initialize the Google Client
$client = new Google_Client();
$client->setClientId(copy from notesnook.com);
$client->setClientSecret(copy from notesnook.com);
$client->setRedirectUri('https://busybrainy.com/callback.php');

// Handle the OAuth 2.0 server response
if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $_SESSION['access_token'] = $token;

    // Set the access token for the client
    $client->setAccessToken($token);

    // Get the user profile data
    $oauth2 = new Google_Oauth2Service($client);
    $userinfo = $oauth2->userinfo->get();

    // Display user information
    echo '<h1>User Information</h1>';
    echo 'User ID: ' . htmlspecialchars($userinfo['id']) . '<br>';
    echo 'User Name: ' . htmlspecialchars($userinfo['name']) . '<br>';
    echo 'User Email: ' . htmlspecialchars($userinfo['email']) . '<br>';
    echo 'User Picture: <img src="' . htmlspecialchars($userinfo['picture']) . '"><br>';
} else {
    echo 'Error: No code returned from Google OAuth2.';
}
?>
