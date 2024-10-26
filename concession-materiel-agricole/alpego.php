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
    <link rel="stylesheet" type="text/css" href="/style/marques/pronar/pronar.css">
    <link rel="stylesheet" type="text/css" href="/style/formulaire_contact.css">
    <!------------------------------------------------ onglet ------------------------------------------------------------>
    <title>ALPEGO - SPAI-France</title>
    <link rel="icon" href="/images/logo.ico" type="image/x-icon" />
    <!------------------------------------------------ font ------------------------------------------------------------>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!------------------------------------------------ SEO ------------------------------------------------------------>
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="description" content="SPAI-France est un concessionnaire situé dans le 89 à Sens, spécialisé dans la vente de matériel agricole de la marque ALPEGO .">
    <!-- <link rel="canonical" href="https://spai-france.com/concession-materiel-agricole/alpego.php"> a modifier-->
    <meta property="og:type" content="article">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:title" content="ALPEGO - SPAI-France">
    <meta property="og:description" content="SPAI-France est un concessionnaire situé dans le 89 à Sens, spécialisé dans la vente de matériel agricole de la marque ALPEGO .">
    <!-- <meta property="og:url" content="https://spai-france.com/concession-materiel-agricole/alpego.php"> a modifier-->
    <meta property="og:site_name" content="SPAI-France">
</head>
<!--------------------------------------------------- Header ---------------------------------------------------------------------------->
<?php require_once('../composants/header.php'); ?>

<section class="section_presentation">
    <div class="div_top_alpego">
    </div>
    <h1 class="h1_alpego">Alpego Votre fabricant de materiel agricole</h1>
    <div class="txt_presentation_pronar">
        <p>
            Alpego est basée au nord-est de l'Italie, à mi-chemin
            entre le lac de Garde et Venise, à proximité des villes
            de Vérone et Vicence. Sur ce territoire, avec ses importantes
            liaisons autoroutières qui sillonnent l'Italie et les pays
            voisins, il existe un tissu industriel et artisanal florissant
            composé de nombreuses entreprises professionnelles qui exportent leurs produits dans le monde entier.
        </p>
        <p>
            Tous les produits continuent d'être conçus et élaborés en
            interne afin de conserver l'intégralité du savoir-faire de chaque
            projet. Alpego peut se targuer de détenir encore actuellement de
            nombreux brevets actifs. Dans un souci de qualité et de fiabilité,
            leurs machines continuent également d'être produites en interne par
            leurs personnel qualifié et constamment mis à jour, tout en bénéficiant
            de l'appui de fournisseurs italiens de haut niveau.</p>
    </div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/glZ9i2rjQLc?si=Vtco00YoBXLjKBSF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</section>
<?php
//-------------------------------------------------------- Composants ------------------------------------------------------------------->
require_once('./alpego/fraiseherse.php');
require_once('./alpego/decompacteur.php');
require_once('./alpego/semoirtremie.php');
//---------------------------------------------------------- Contact -------------------------------------------------------------------->
require_once('../composants/formulaire_contact.php');
//--------------------------------------------------- Nos dernières actualités ---------------------------------------------------------->
require_once('../composants/actualites.php');
//----------------------------------------------------------- footer -------------------------------------------------------------------->
require_once('../composants/footer.php'); ?>
<!--------------------------------------------------- script slider ---------------------------------------------------------------------------->
<script src="../documents/slider-2images.js"></script>
<script>
    // ----------------------------lance le slider fraise herse----------------------------------
    let currentIndexFraise = 0;
    const sliderFraise = document.querySelector(".slider-fraise");
    const tailleSlideFraise = adjustSlideSize2(sliderFraise);
    setInterval(() => {
        currentIndexFraise = scrollSlider2(
            sliderFraise,
            currentIndexFraise,
            tailleSlideFraise
        );
    }, 3500);
    // ----------------------------lance le slider decompacteur----------------------------------
    let currentIndexDecompacteur = 0;
    const sliderDecompacteur = document.querySelector(".slider-decompacteur");
    const tailleSlideDecompacteur = adjustSlideSize2(sliderDecompacteur);
    setInterval(() => {
        currentIndexDecompacteur = scrollSlider2(
            sliderDecompacteur,
            currentIndexDecompacteur,
            tailleSlideDecompacteur
        );
    }, 3500);
    // ----------------------------lance le slider semoir tremie----------------------------------
    let currentIndexSemoir = 0;
    const sliderSemoir = document.querySelector(".slider-semoir");
    const tailleSlideSemoir = adjustSlideSize2(sliderSemoir);
    setInterval(() => {
        currentIndexSemoir = scrollSlider2(
            sliderSemoir,
            currentIndexSemoir,
            tailleSlideSemoir
        );
    }, 3500);
</script>