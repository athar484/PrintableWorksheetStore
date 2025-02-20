<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

if (function_exists('opcache_reset')) {
    opcache_reset();
}


session_start();

require_once 'google-api-php-client/vendor/autoload.php';


// Initialize the Google Client
$client = new Google_Client();
$client->setClientId(copy from notesnook.com);
$client->setClientSecret(copy from notesnook.com);

$client->setRedirectUri('https://busybrainy.com/callback.php');

$client->addScope('email');
$client->addScope('profile');

// Create the URL for Google Sign-In
$authUrl = $client->createAuthUrl();

// Redirect to Google OAuth2 authentication page
header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));
exit();
?>
