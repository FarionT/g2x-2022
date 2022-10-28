<?php
// Start session
if(!session_id()){
    session_start();
}
if(isset($_POST['ReReURL'])){
    $_SESSION['ReURL'] = 'http://localhost/g2x/g2x-2022/game/elz00/4s4rW/';
    $_SESSION['ReReURL'] = $_POST['ReReURL'];
}
// Database configuration
define('DB_HOST', 'MySQL_Database_Host');
define('DB_USERNAME', 'MySQL_Database_Username');
define('DB_PASSWORD', 'MySQL_Database_Password');
define('DB_NAME', 'MySQL_Database_Name');
define('DB_USER_TBL', 'users');

// Google API configuration
define('GOOGLE_CLIENT_ID', '32331049522-b8l7t5nivii304ve6i62edhhenhv609i.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', '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');
define('GOOGLE_REDIRECT_URL', $_SESSION['ReURL']);



// Include Google API client library
require_once 'google-api-php-client/Google_Client.php';
require_once 'google-api-php-client/contrib/Google_Oauth2Service.php';

// Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to G2X');
$gClient->setClientId(GOOGLE_CLIENT_ID);
$gClient->setClientSecret(GOOGLE_CLIENT_SECRET);
$gClient->setRedirectUri(GOOGLE_REDIRECT_URL);

$google_oauthV2 = new Google_Oauth2Service($gClient);