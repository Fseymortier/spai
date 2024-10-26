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
    <link rel="stylesheet" type="text/css" href="/style/marques/maupu/semi_remorque.css">
    <link rel="stylesheet" type="text/css" href="/style/marques/maupu/travaux_publique.css">
    <link rel="stylesheet" type="text/css" href="/style/marques/maupu/maupu.css">
    <link rel="stylesheet" type="text/css" href="/style/formulaire_contact.css">
    <!------------------------------------------------ onglet ------------------------------------------------------------>
    <title>MAUPU - SPAI-France</title>
    <link rel="icon" href="/images/logo.ico" type="image/x-icon" />
    <!------------------------------------------------ font ------------------------------------------------------------>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!------------------------------------------------ SEO ------------------------------------------------------------>
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="description" content="SPAI-France est un concessionnaire situé dans le 89 à Sens, spécialisé dans la vente de matériel agricole de la marque MAUPU.">
    <!-- <link rel="canonical" href="https://spai-france.com/concession-materiel-agricole/maupu.php"> a modifier-->
    <meta property="og:locale" content="fr_FR">
    <meta property="og:type" content="article">
    <meta property="og:title" content="MAUPU - SPAI-France">
    <meta property="og:description" content="SPAI-France est un concessionnaire situé dans le 89 à Sens, spécialisé dans la vente de matériel agricole de la marque MAUPU.">
    <!-- <meta property="og:url" content="https://spai-france.com/concession-materiel-agricole/maupu.php"> a modifier-->
    <meta property="og:site_name" content="SPAI-France">
    
</head>
<!--------------------------------------------------- Header ---------------------------------------------------------------------------->
<?php require_once('../composants/header.php'); ?>

<section class="section_presentation presentation_maupu">
    <div class="div_top_maupu">
    </div>
    <h1 class="h1_maupu">MAUPU Spécialiste Bennes Agricoles & Travaux Publics</h1>
    <p class="txt_presentation_maupu"><strong>Bennes Maupu SA</strong> est une entreprise familiale depuis 1925, la production est située dans l'Eure et Loir (28) entre Orléans et Paris, stratégiquement au milieu des principales régions de production de céréales en France. En 2020 la société Maupu lance un vaste programme d'homologation de ses véhicules suivant la nouvelle norme européenne EU167/2013 afin d'envisager sereinement un avenir européen. Les remorques et semi-remorques agricoles Maupu sont synonymes de qualité et de robustesse. Elles sont vendues en France et en Europe pour des PTAC allant de 24 à 34 Tonnes. </p>
    <div class="slider-container">
        <div class="slider slider-maupu">
            <div class="slide">
                <img src="/images/maupu/slider1.webp" class="img_slider_marque" alt="illustration de benne">
            </div>
            <div class="slide">
                <img src="/images/maupu/slider2.webp" class="img_slider_marque" alt="illustration de benne">
            </div>
            <div class="slide">
                <img src="/images/maupu/slider3.webp" class="img_slider_marque" alt="illustration de benne">
            </div>
            <div class="slide">
                <img src="/images/maupu/slider4.webp" class="img_slider_marque" alt="illustration de benne">
            </div>
            <div class="slide">
                <img src="/images/maupu/slider1.webp" class="img_slider_marque" alt="illustration de benne">
            </div>
            <div class="slide">
                <img src="/images/maupu/slider2.webp" class="img_slider_marque" alt="illustration de benne">
            </div>
            <div class="slide">
                <img src="/images/maupu/slider3.webp" class="img_slider_marque" alt="illustration de benne">
            </div>
            <div class="slide">
                <img src="/images/maupu/slider4.webp" class="img_slider_marque" alt="illustration de benne">
            </div>
        </div>
    </div>
</section>
<?php require_once('./maupu/semi_remorque.php') ?>
<?php require_once('./maupu/plateau.php') ?>
<?php require_once('./maupu/travaux_publique.php') ?>
<!---------------------------------------------- Contact ---------------------------------------------------------------->
<?php require_once('../composants/formulaire_contact.php') ?>
<!---------------------------------------------- Nos dernières actualités ---------------------------------------------------------------->
<?php require_once('../composants/actualites.php'); ?>
<!----------------------------------------------------------- footer --------------------------------------------------------------------->
<?php require_once('../composants/footer.php'); ?>
<!--------------------------------------------------- script slider ---------------------------------------------------------------------------->
<script src="../documents/slider-maupu.js"></script>