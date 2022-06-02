<?php 

$keywords = 'mots cles, mots cles';
$description = 'description de la page';
$descriptitle = 'Developeur web apps junior';
$descriptitleH1 = 'Developeur';
$descriptitleH2 = 'web apps';
$descriptitleH3 = 'junior';

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
            <div class="text">
                <ul>
                    <li><h1><?=$descriptitleH1?></h1></li>
                    <li><h2><?=$descriptitleH2?></h2></li>
                    <li><h3><?=$descriptitleH3?></h3></li>
                    <li>
                        <a href="http://" target="_blank" >
                            C.V. &nbsp; 
                            <i class="fa-solid fa-file-pdf"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="photoProfil" style="background-image: url('https://scontent.fcrl2-1.fna.fbcdn.net/v/t39.30808-6/284031159_758112235569491_5220433864634129557_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=xa0fRZ-B29AAX-bfxUR&_nc_ht=scontent.fcrl2-1.fna&oh=00_AT-zurvSCYw4lu7NaAMxgpxHJM1OuCkGhAsA-kHlNEnrGQ&oe=629D083E');">
            </div>

            
        </div>

        <div class="intro" style="background-image: url('');">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum excepturi odio perferendis ratione delectus repudiandae aliquam, necessitatibus voluptatum! Dolorum, vero mollitia! Excepturi soluta corrupti nam vitae beatae, veniam ipsa perspiciatis.</p>

            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum possimus recusandae deleniti delectus fugiat quibusdam dolore repudiandae? Rerum, tenetur corporis! Repellat placeat, ducimus dicta quia molestias dignissimos suscipit. Vel officia dolores omnis voluptatem doloremque expedita harum itaque qui fugiat, odio atque repudiandae. Quia quaerat doloremque ipsam minus accusantium, autem reiciendis!</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur sit laudantium quo ad accusamus odio. Doloribus illum nemo incidunt qui repellat nobis modi, ex asperiores pariatur explicabo molestiae ut, accusamus eaque. Autem corrupti nam quisquam nisi harum dignissimos ducimus quibusdam.</p>
        </div>
    </div>

    

    <h1 class="titre_Portfolio">Démos :</h1>

    <div class="galleryIMG">

        <div style="background-image: url('./public/images/imgs/Sans titre.png');">
            <a href="exemples/WAWMOMO-v3/" target="_blank">Site Vitrine</a>
        </div>

        <div style="background-image: url('https://images.all-free-download.com/images/graphiclarge/hexagon_3d_background_6813383.jpg');">
            <a href="http:\\google.be">Site streaming</a>
        </div>

        <div style="background-image: url('https://images.unsplash.com/photo-1604964432806-254d07c11f32?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8ZGV2ZWxvcGVyfGVufDB8fDB8fA%3D%3D&w=1000&q=80');">
            <a href="http:\\google.be">E-comerce</a>
        </div>

        <div style="background-image: url('https://images.all-free-download.com/images/graphiclarge/hexagon_3d_background_6813383.jpg');">
            <a href="http:\\google.be">Gestion users</a>
        </div>

    </div>

    <h1 class="titre_Portfolio">Connaissances :</h1>

    <div class="connaissances">

        <a class="link_pdf" href="http://" target="_blank" >
            C.V. &nbsp; 
            <i class="fa-solid fa-file-pdf"></i>
        </a>

        <ul>
            <li style="width: <?=$html?>%;"><p>Html5</p> <p><?=$html?>%</p></li>
            <li style="width: <?=$css?>%;"><p>Css3</p> <p><?=$css?>%</p></li>
            <li style="width: <?=$sass?>%;"><p>Sass</p> <p><?=$sass?>%</p></li>
            <li style="width: <?=$vuejs?>%;"><p>Vuejs</p> <p><?=$vuejs?>%</p></li>
            <li style="width: <?=$php?>%;"><p>Php</p> <p><?=$php?>%</p></li>
            <li style="width: <?=$nodejs?>%;"><p>NodeJs</p> <p><?=$nodejs?>%</p></li>
        </ul>
    </div>

</div>

<footer>
    <ul>
        <li><a href="https://www.linkedin.com/in/hugo-lopes-clavinas-795aaa97/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
        <li><a href="https://my.indeed.com/resume?hl=fr&co=BE&from=gnav-menu-homepage&_ga=2.237077186.350364294.1651407770-815407004.1649620839" target="_blank"><img src="./public/images/siteWeb/icons/icon_indeeed.png" alt="" height="20px"></a></li>
    </ul>

    <ul class="copyright">
        <li><i class="far fa-copyright"></i>&nbsp; 2022 Hugo Clavinas</li>
    </ul>
</footer>