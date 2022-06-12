<?php
session_start();

$http = "http://localhost/projets/model_default_v1_04-2022/dashboard/";

use App\auth\Verif;

$verif = new Verif();

$result = $verif->veriffication($_POST['usr'], $_POST['psw']);

if (!empty($result)) {

    $_SESSION["AUTH"] = "auth";
    
    header('Location:'.$http.'loading');

}else{

    header('Location:'.$http.'?msg=invalide');
}