<?php
session_start();

require_once('httpUrl.php');
$http = $urlDashboard;

use App\auth\Verif;

$verif = new Verif();

$result = $verif->veriffication($_POST['usr'], $_POST['psw']);

if (!empty($result)) {

    $_SESSION["AUTH"] = "auth";
    
    header('Location:'.$http.'loading');

}else{

    header('Location:'.$http.'?msg=invalide');
}