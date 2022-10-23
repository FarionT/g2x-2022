<?php
// Include configuration file 
require_once 'config.php';
// Include User library file 
require_once 'User.class.php';

if(isset($_GET['code'])){ //login with google
    $gClient->authenticate($_GET['code']); 
    $_SESSION['token'] = $gClient->getAccessToken();
    $user = new User();
    $gpUserProfile = $google_oauthV2->userinfo->get(); 

    $gpUserData = array();
    $gpUserData['oauth_uid']    = !empty($gpUserProfile['id'])?$gpUserProfile['id']:''; 
    $gpUserData['first_name']   = !empty($gpUserProfile['given_name'])?$gpUserProfile['given_name']:''; 
    $gpUserData['last_name']    = !empty($gpUserProfile['family_name'])?$gpUserProfile['family_name']:''; 
    $gpUserData['email']        = !empty($gpUserProfile['email'])?$gpUserProfile['email']:''; 
    $gpUserData['gender']       = !empty($gpUserProfile['gender'])?$gpUserProfile['gender']:''; 
    $gpUserData['locale']       = !empty($gpUserProfile['locale'])?$gpUserProfile['locale']:''; 
    $gpUserData['picture']      = !empty($gpUserProfile['picture'])?$gpUserProfile['picture']:''; 
     
    // Insert or update user data to the database 
    $gpUserData['oauth_provider'] = 'google'; 
    $userData = $user->checkUser($gpUserData); 
    exit(header('location: '.$_SESSION['ReReURL']));
} 

if(isset($_SESSION['token'])){ //login with google
    $gClient->setAccessToken($_SESSION['token']); 
} 
if($gClient->getAccessToken()){ //already login with google
    // Get user profile data from google 
    $user = new User();
    $gpUserProfile = $google_oauthV2->userinfo->get(); 

    $gpUserData = array();
    $gpUserData['oauth_uid']    = !empty($gpUserProfile['id'])?$gpUserProfile['id']:''; 
    $gpUserData['first_name']   = !empty($gpUserProfile['given_name'])?$gpUserProfile['given_name']:''; 
    $gpUserData['last_name']    = !empty($gpUserProfile['family_name'])?$gpUserProfile['family_name']:''; 
    $gpUserData['email']        = !empty($gpUserProfile['email'])?$gpUserProfile['email']:''; 
    $gpUserData['gender']       = !empty($gpUserProfile['gender'])?$gpUserProfile['gender']:''; 
    $gpUserData['locale']       = !empty($gpUserProfile['locale'])?$gpUserProfile['locale']:''; 
    $gpUserData['picture']      = !empty($gpUserProfile['picture'])?$gpUserProfile['picture']:''; 
     
    // Insert or update user data to the database 
    $gpUserData['oauth_provider'] = 'google'; 
    $userData = $user->checkUser($gpUserData); 
    if(!empty($userData)){// user login
        if($user->isVote($gpUserData, $_POST['vote'])){
            echo "<p>You already voted</p>";
        }
        else{
            echo "<p>Thanks for voting</p>";
            $user->DoVote($gpUserData, $_POST['vote']);
        }
    }
}
if(empty($userData)){ 
    $authUrl = $gClient->createAuthUrl();
    echo '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'"><img src="../images/google-sign-in-btn.png" alt="vote"/></a>'; 
}