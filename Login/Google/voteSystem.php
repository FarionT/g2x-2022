
<?php 
$LoginGoogle = '';
// Include configuration file 
require_once 'config.php'; 
 
// Include User library file 
require_once 'User.class.php'; 
if(isset($_GET['code'])){ //login with google
    $gClient->authenticate($_GET['code']); 
    $_SESSION['token'] = $gClient->getAccessToken(); 
    header('Location: ' . filter_var(GOOGLE_REDIRECT_URL, FILTER_SANITIZE_URL)); 
} 
 
if(isset($_SESSION['token'])){ //login with google
    $gClient->setAccessToken($_SESSION['token']); 
} 
 
if($gClient->getAccessToken()){ //already login with google
    // Get user profile data from google 
    $gpUserProfile = $google_oauthV2->userinfo->get(); 
     
    // Initialize User class 
    $user = new User();
     
    // Getting user profile info 
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
     
    // Storing user data in the session 
    $_SESSION['userData'] = $userData; 
     
    if(!empty($userData)){// user login
        if($user->isVote($gpUserData, "1")){
            $output = "<p>You already voted</p>";
        }
        else{
            $output = "<p>Thanks for voting</p>";
        }
    }else{ 
        $output = '<h3 style="color:red">Some problem occurred, please try again.</h3>'; 
    } 
}else{ // user not login
    // Get login url 
    $authUrl = $gClient->createAuthUrl(); 
     
    // Render google login button 
    $LoginGoogle = "href='".filter_var($authUrl, FILTER_SANITIZE_URL)."'";
}
?>
