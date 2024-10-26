<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!----------------------------------------------- style ----------------------------------------------------------->
    <link rel="stylesheet" type="text/css" href="/style/header.css">
    <link rel="stylesheet" type="text/css" href="/style/index.css">
    <link rel="stylesheet" type="text/css" href="/style/actualites.css">
    <link rel="stylesheet" type="text/css" href="/style/footer.css">
    <link rel="stylesheet" type="text/css" href="/style/marques/kockerling/allrounder_classic.css">
    <link rel="stylesheet" type="text/css" href="/style/marques/kockerling/allrounder_flatline.css">
    <link rel="stylesheet" type="text/css" href="/style/marques/kockerling/allrounder_profiline.css">
    <link rel="stylesheet" type="text/css" href="/style/marques/kockerling/kockerling.css">
    <link rel="stylesheet" type="text/css" href="/style/formulaire_contact.css">
    <!------------------------------------------------ onglet ------------------------------------------------------------>
    <title>KOCKERLING - SPAI-France</title>
    <link rel="icon" href="/images/logo.ico" type="image/x-icon" />
    <!------------------------------------------------ font ------------------------------------------------------------>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!------------------------------------------------ SEO ------------------------------------------------------------>
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="description" content="SPAI-France est un concessionnaire situé dans le 89 à Sens, spécialisé dans la vente de matériel agricole de la marque KOCKERLING.">
    <!-- <link rel="canonical" href="https://spai-france.com/concession-materiel-agricole/kockerling.php"> a modifier-->
    <meta property="og:type" content="article">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:title" content="KOCKERLING - SPAI-France">
    <meta property="og:description" content="SPAI-France est un concessionnaire situé dans le 89 à Sens, spécialisé dans la vente de matériel agricole de la marque KOCKERLING.">
    <!-- <meta property="og:url" content="https://spai-france.com/concession-materiel-agricole/kockerling.php"> a modifier-->
    <meta property="og:site_name" content="SPAI-France">
</head>
<!--------------------------------------------------- Header ---------------------------------------------------------------------------->
<?php require_once('../composants/header.php'); ?>

<section class="section_presentation">
    <div class="div_top_kockerling">
    </div>
    <h1 class="h1_kockerling">Kockerling Spécialiste Travail du sol & Technique de semis</h1>
    <p class="txt_presentation_kockerling">Les frères Heinrich et Friedrich Kockerling se sont engagés dans la fabrication industrielle de matériels de travail du sol. en 1955. Avant cela. la famille Kockerling exploitait depuis plusieurs générations. dans la commune voisine. une forge et un atelier de fabrication et de négoce de machines agricoles. C'est en ce lieu qu'a débuté la fabrication artisanale de machines spéciales de travail du sol.</p>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/a-g5Pz8JMp4?si=BkXEziR2NkOn1CiZ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</section>
<section>
    <h2 class="h2_kockerling">Travail du sol</h2>
    <div class="container_kockerling">
        <img src="/images/kockerling/allrounder.webp" class="img_travail_sol" alt="illustration allrounder">
        <div class="container_txt_travail_sol">
            <p>Grâce à son très grand dégagement sous châssis (60 cm). l'Allrounder Kockerling classic est bien plus qu'un outil de préparation de lit de semence. Il est plutôt à considérer comme étant une machine universelle qui permet de réaliser un large éventail de façons culturales.</p>
            <p>Parmi celles-ci il y a :</p>
            <ul class="ul_travail_sol">
                <li>La réalisation d'un lit de semence après labour</li>
                <li>L'ameublissement et l'aération du sol au printemps</li>
                <li>L'enfouissement de lisier</li>
                <li>Le deuxième déchaumage après le passage d'un déchaumeur lourd</li>
                <li>La destruction des faux semis. et plus généralement un désherbage mécanique</li>
            </ul>
        </div>
    </div>
</section>

<?php
//-------------------------------------------------------- Composants ------------------------------------------------------------------>
require_once('./kockerling/allrounder_classic.php');
require_once('./kockerling/allrounder_profiline.php');
require_once('./kockerling/allrounder_flatline.php');
require_once('./kockerling/dechaumeur.php');
require_once('./kockerling/semoir.php');
require_once('./kockerling/module_kockerling.php');
//--------------------------------------------------------- Contact --------------------------------------------------------------------->
require_once('../composants/formulaire_contact.php');
//-------------------------------------------------- Nos dernières actualités ----------------------------------------------------------->
require_once('../composants/actualites.php');
//----------------------------------------------------------- footer -------------------------------------------------------------------->
require_once('../composants/footer.php'); ?>
<!--------------------------------------------------- script slider ---------------------------------------------------------------------------->
<script src="../documents/slider-kockerling.js"></script>