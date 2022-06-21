<?php
    
require_once('httpUrl.php');
$http = $urlDashboard;

if (!isset($_SESSION["AUTH"])) {
        
    header('Location:'.$http.'?msg=Vous devez vous connecter avant!');  

    // echo "je suis dans l' IF";
}
elseif (isset($_SESSION["AUTH"]) && $_SESSION["AUTH"] == "false") {
        
    header('Location:'.$http.'?msg=Vous devez vous connecter à nouveau!');
}
else{
    // echo "je suis dans l' ELSE";
}
    
?>