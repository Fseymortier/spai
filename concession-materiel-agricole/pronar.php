<?php  ?>
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
    <title>PRONAR - SPAI-France</title>
    <link rel="icon" href="/images/logo.ico" type="image/x-icon" />
    <!------------------------------------------------ font ------------------------------------------------------------>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!------------------------------------------------ SEO ------------------------------------------------------------>
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="description" content="SPAI-France est un concessionnaire situé dans le 89 à Sens, spécialisé dans la vente de matériel agricole de la marque PRONAR.">
    <!-- <link rel="canonical" href="https://spai-france.com/concession-materiel-agricole/pronar.php"> a modifier-->
    <meta property="og:type" content="article">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:title" content="PRONAR - SPAI-France">
    <meta property="og:description" content="SPAI-France est un concessionnaire situé dans le 89 à Sens, spécialisé dans la vente de matériel agricole de la marque PRONAR.">
    <!-- <meta property="og:url" content="https://spai-france.com/concession-materiel-agricole/pronar.php"> a modifier-->
    <meta property="og:site_name" content="SPAI-France">
</head>
<!--------------------------------------------------- Header ---------------------------------------------------------------------------->
<?php require_once('../composants/header.php'); ?>

<section class="section_presentation">
    <div class="div_top_pronar">
    </div>
    <h1 class="h1_pronar">Pronar Spécialiste Bennes Agricoles & Travaux Publics</h1>
    <p class="txt_presentation_pronar">Pronar est une entreprise fondée il y a près de 30 ans dans
        la petite ville de Narew en région de Podlachie. « Pro »
        signifie production, « Nar » signifie Narew - d'où le nom
        de l'entreprise. Plus de 3 000 employés, 8 usines modernes,
        où 4 000 pièces de près de 600 tonnes d'acier sont produites
        chaque jour sur la superficie de 80 terrains de football. Dès
        le début (1988), les propriétaires ont eu une idée d'entreprise
        dans la tête. Ils voulaient avant tout mettre en œuvre des
        différents profils d'activité d'entreprise.</p>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/xq171dBOdwo?si=6RcOmK2j_ZUMam6G" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</section>
<?php
//--------------------------------------------------- composants ------------------------------------------------------------------------->
require_once('./pronar/benne.php');
require_once('./pronar/amplirolls.php');
require_once('./pronar/fauchage.php');
//--------------------------------------------------- Contact ---------------------------------------------------------------------------->
require_once('../composants/formulaire_contact.php');
//---------------------------------------------- Nos dernières actualités ---------------------------------------------------------------->
require_once('../composants/actualites.php');
//----------------------------------------------------------- footer --------------------------------------------------------------------->
require_once('../composants/footer.php'); ?>
<!--------------------------------------------------- script slider ---------------------------------------------------------------------------->
<script src="../documents/slider-3images.js"></script>
<script src="../documents/slider-2images.js"></script>
<script>
    // ----------------------------lance le slider benne----------------------------------
    let currentIndexBenne = 0;
    const sliderBenne = document.querySelector(".slider-benne");
    const tailleSlideBenne = adjustSlideSize(sliderBenne);
    setInterval(() => {
        currentIndexBenne = scrollSlider(
            sliderBenne,
            currentIndexBenne,
            tailleSlideBenne
        );
    }, 2500);
    // ----------------------------lance le slider ampliroll----------------------------------
    let currentIndexAmpliroll = 0;
    const sliderAmpliroll = document.querySelector(".slider-ampliroll");
    const tailleSlideAmpliroll = adjustSlideSize2(sliderAmpliroll);
    setInterval(() => {
        currentIndexAmpliroll = scrollSlider2(
            sliderAmpliroll,
            currentIndexAmpliroll,
            tailleSlideAmpliroll
        );
    }, 3500);
    // ----------------------------lance le slider fauchage----------------------------------
    let currentIndexFauchage = 0;
    const sliderFauchage = document.querySelector(".slider-fauchage");
    const tailleSlideFauchage = adjustSlideSize(sliderFauchage);
    setInterval(() => {
        currentIndexFauchage = scrollSlider(
            sliderFauchage,
            currentIndexFauchage,
            tailleSlideFauchage
        );
    }, 2500);
</script>