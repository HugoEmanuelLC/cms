
<img src="<?= IMAGES . 'images' . DIRECTORY_SEPARATOR . 'Loading_icon.gif'?>" alt="">

<?php

require_once('httpUrl.php');
$http = $urlDashboard;

sleep(1);

header('Location:'.$http.'home');

?>
