<?php
session_start();
$msg = "";
$http = "https://localhost/projets/model-04-2022/dashboard/login";

$keywords = 'mots cles, mots cles';
$description = 'description de la page';
$descriptitle = 'Accueil | Dashboard';

// require('../views/dashboard/fragments/navbar.php');
require_once('../views/dashboard/services/deconnAuth.php');


?>

<?php //ob_start(); ?>

<h1><?=$descriptitle?> <?php  ?> </h1>

<a href="http://localhost/projets/model-04-2022/"> <=Retour </a>

<h3><?= $msg = (isset($_GET["msg"])) ? $_GET["msg"] : false ?></h3>

<form action="<?= $http; ?>" method="post">
    <p>user</p>
    <input type="text" name="usr">

    <p>password</p>
    <input type="password" name="psw">
    <br>
    <br>
    <input type="submit" value="connection">
</form>

<?php //$content = ob_get_clean(); ?>