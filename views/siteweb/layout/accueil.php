<?php 

$keywords = 'mots cles, mots cles';
$description = 'description de la page';
$descriptitle = 'Accueil';

require('../views/siteWeb/fragments/navbar.php');

?>

<header>

</header>

<?=$navbar = (isset($navbar)) ? $navbar : false ?>

<div class="contenue">
    <h1><?=$descriptitle?></h1>
</div>