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
    <title>GRÉGOIRE & BESSON - SPAI-France</title>
    <link rel="icon" href="/images/logo.ico" type="image/x-icon" />
    <!------------------------------------------------ font ------------------------------------------------------------>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!------------------------------------------------ SEO ------------------------------------------------------------>
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="description" content="SPAI-France est un concessionnaire situé dans le 89 à Sens, spécialisé dans la vente de matériel agricole de la marque GRÉGOIRE &amp; BESSON.">
    <!-- <link rel="canonical" href="https://spai-france.com/concession-materiel-agricole/gregoire-besson.php"> a modifier-->
    <meta property="og:type" content="article">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:title" content="GRÉGOIRE &amp; BESSON - SPAI-France">
    <meta property="og:description" content="SPAI-France est un concessionnaire situé dans le 89 à Sens, spécialisé dans la vente de matériel agricole de la marque GRÉGOIRE &amp; BESSON.">
    <!-- <meta property="og:url" content="https://spai-france.com/concession-materiel-agricole/gregoire-besson.php"> a modifier-->
    <meta property="og:site_name" content="SPAI-France">
</head>
<!--------------------------------------------------- Header ---------------------------------------------------------------------------->
<?php require_once('../composants/header.php'); ?>

<section class="section_presentation">
    <div class="div_top_besson">
    </div>
    <h1 class="h1_besson">Grégoire & Besson Spécialiste du travail du sol, constructeur de matériel haut de gamme.</h1>
    <p class="txt_presentation_pronar">Grégoire Besson, créé en 1802 est une société française, spécialisée dans la fabrication
        de matériel agricole, et en particulier le matériel de travail du sol. Le concessionnaire
        SPAI vous propose des gammes de charrues avec des charrues portées réversibles et des outils
        à disques comme des pulvériseurs en V.</p>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/F6SmRcqHyLg?si=YcM8BrKWTjcFAkXy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</section>

<?php
//-------------------------------------------------------- Composants -------------------------------------------------------------------->
require_once('./besson/charrueporte.php');
require_once('./besson/semiporte.php');
require_once('./besson/covercrop.php');
//-------------------------------------------------------- Contact ----------------------------------------------------------------------->
require_once('../composants/formulaire_contact.php');
//------------------------------------------------- Nos dernières actualités ------------------------------------------------------------->
require_once('../composants/actualites.php');
//----------------------------------------------------------- footer --------------------------------------------------------------------->
require_once('../composants/footer.php'); ?>
<!--------------------------------------------------- script slider ---------------------------------------------------------------------->
<script src="../documents/slider-2images.js"></script>
<script>
    // ----------------------------lance le slider charrue porte----------------------------------
    let currentIndexPorte = 0;
    const sliderPorte = document.querySelector(".slider-porte");
    const tailleSlidePorte = adjustSlideSize2(sliderPorte);
    setInterval(() => {
        currentIndexPorte = scrollSlider2(
            sliderPorte,
            currentIndexPorte,
            tailleSlidePorte
        );
    }, 3500);
    // ----------------------------lance le slider charrue semi-porte----------------------------------
    let currentIndexSemiPorte = 0;
    const sliderSemiPorte = document.querySelector(".slider-semiporte");
    const tailleSlideSemiPorte = adjustSlideSize2(sliderSemiPorte);
    setInterval(() => {
        currentIndexSemiPorte = scrollSlider2(
            sliderSemiPorte,
            currentIndexSemiPorte,
            tailleSlideSemiPorte
        );
    }, 3500);
    // ----------------------------lance le slider covercrop----------------------------------
    let currentIndexCoverCrop = 0;
    const sliderCoverCrop = document.querySelector(".slider-covercrop");
    const tailleSlideCoverCrop = adjustSlideSize2(sliderCoverCrop);
    setInterval(() => {
        currentIndexCoverCrop = scrollSlider2(
            sliderCoverCrop,
            currentIndexCoverCrop,
            tailleSlideCoverCrop
        );
    }, 3500);
</script>