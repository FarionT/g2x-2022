<?php
$gameID = 1;
if(isset($_GET['game'])) 
    if(is_numeric($_GET['game'])) $gameID = $_GET['game'];
$redirect = "";
switch($gameID){
    case 1:
        $redirect = "Umlja";
        break;
    case 2:
        $redirect = "CBFdm";
        break;
    case 3:
        $redirect = "FuIEx";
        break;
    case 4:
        $redirect = "lZSBp";
        break;
    case 5:
        $redirect = "cyAxI";
        break;
    case 6:
        $redirect = "G9mIH";
        break;
    case 7:
        $redirect = "dlYiB";
        break;
    case 8:
        $redirect = "kZXYh";
        break;
    default:
        $redirect = "./";
}
exit(header("location: $redirect"));