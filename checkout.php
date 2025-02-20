<link rel="stylesheet" id="salert-main-css-css" href="content/style.css?ver=45181196ca1e88cc943122dfdde4d125" media="all">

<?php 

if (function_exists('opcache_reset')) {
    opcache_reset();
}

require_once 'fb.php'; 
PostFbConversionNonPurchase("AddToCart");

include "checkout_design4.php";
?>

 <!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fullscreen Iframe</title>
    <link rel="stylesheet" href="styles.css">
    <style>html, body {
    margin: 0;
    padding: 0;
    height: 100%;
    overflow: hidden;
}

#fullscreen-iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: none; /* Removes the border */
}
</style>
</head>
<body>
    <iframe src="https://app.gumroad.com/checkout?product=enhoc&quantity=1" frameborder="0" id="fullscreen-iframe"></iframe>
</body>
</html>-->