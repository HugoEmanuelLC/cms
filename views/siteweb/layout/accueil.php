<?php 

$keywords = 'mots cles, mots cles';
$description = 'description de la page';
$descriptitle = 'Developeur web apps junior';

//require('../views/siteWeb/fragments/navbar.php');

$html = 70;
$css = 65;
$sass = 60;
$vuejs = 45;
$php = 55;
$nodejs = 50;

?>

<header>
    <h1>Hugo L. Clavinas</h1>
    <p>Agê : 36 ans</p>
    <p>Mail : hugoclavinas@gmail.com</p>
    <p>Adresse : Braine-l'Alleud</p>
</header>

<div class="contenue">

    <div class="haut_de_page">
        <div class="intitule">
            <h1><?=$descriptitle?></h1>
            <div class="photoProfil" style="background-image: url('./public/images/imgs/FB_IMG_1651314627224.jpg');"></div>
        </div>

        <div class="intro" style="background-image: url('');">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum excepturi odio perferendis ratione delectus repudiandae aliquam, necessitatibus voluptatum! Dolorum, vero mollitia! Excepturi soluta corrupti nam vitae beatae, veniam ipsa perspiciatis.</p>

            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum possimus recusandae deleniti delectus fugiat quibusdam dolore repudiandae? Rerum, tenetur corporis! Repellat placeat, ducimus dicta quia molestias dignissimos suscipit. Vel officia dolores omnis voluptatem doloremque expedita harum itaque qui fugiat, odio atque repudiandae. Quia quaerat doloremque ipsam minus accusantium, autem reiciendis!</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur sit laudantium quo ad accusamus odio. Doloribus illum nemo incidunt qui repellat nobis modi, ex asperiores pariatur explicabo molestiae ut, accusamus eaque. Autem corrupti nam quisquam nisi harum dignissimos ducimus quibusdam.</p>
        </div>
    </div>

    

    <h1 class="titre_Portfolio">Portfolio :</h1>

    <div class="galleryIMG">
        <div style="background-image: url('./public/images/imgs/Sans titre.png');">
            <a href="exemples/WAWMOMO-v3/" target="_blank">Site Vitrine</a></div>
        <div style="background-image: url('https://images.all-free-download.com/images/graphiclarge/hexagon_3d_background_6813383.jpg');">
            <a href="http:\\google.be">Site streaming</a></div>
        <div style="background-image: url('https://images.unsplash.com/photo-1604964432806-254d07c11f32?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8ZGV2ZWxvcGVyfGVufDB8fDB8fA%3D%3D&w=1000&q=80');">
            <a href="http:\\google.be">E-comerce</a></div>
        <div style="background-image: url('https://images.all-free-download.com/images/graphiclarge/hexagon_3d_background_6813383.jpg');">
            <a href="http:\\google.be">Gestion users</a></div>
        <!-- <div style="background-image: url('https://images.unsplash.com/photo-1604964432806-254d07c11f32?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8ZGV2ZWxvcGVyfGVufDB8fDB8fA%3D%3D&w=1000&q=80');">
            <a href="http:\\google.be"></a></div> -->
    </div>

    <h1 class="titre_Portfolio">Connaissances :</h1>

    <div class="connaissances">

        <a id="pdf" class="link_pdf" href="http://" target="_blank" >
            C.V. &nbsp; <i class="fa-solid fa-file-pdf"></i></a>

        <ul>
            <li style="width: <?=$html?>%;"><p>Html5</p> <p><?=$html?>%</p></li>
            <li style="width: <?=$css?>%;"><p>Css3</p> <p><?=$css?>%</p></li>
            <li style="width: <?=$sass?>%;"><p>Sass</p> <p><?=$sass?>%</p></li>
            <li style="width: <?=$vuejs?>%;"><p>Vuejs</p> <p><?=$vuejs?>%</p></li>
            <li style="width: <?=$php?>%;"><p>Php</p> <p><?=$php?>%</p></li>
            <li style="width: <?=$nodejs?>%;"><p>NodeJs</p> <p><?=$nodejs?>%</p></li>
        </ul>
    </div>

    <div class="infos">
        <div>
            <h1>A propos</h1>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam dolorem ab reprehenderit corporis nam? Magnam eum omnis dolorum possimus quae!</p>
        </div>

        <div>
        </div>
    </div>
</div>

<footer>
    
</footer>