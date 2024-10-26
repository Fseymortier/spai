<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!----------------------------------------------- style ----------------------------------------------------------->
    <link rel="stylesheet" type="text/css" href="/style/header.css" />
    <link rel="stylesheet" type="text/css" href="/style/actualites.css" />
    <link rel="stylesheet" type="text/css" href="/style/footer.css" />
    <link rel="stylesheet" type="text/css" href="/style/accueil/marques_renseignement.css" />
    <link rel="stylesheet" type="text/css" href="/style/accueil/nos_machines.css" />
    <link rel="stylesheet" type="text/css" href="/style/accueil/notre_equipe.css" />
    <link rel="stylesheet" type="text/css" href="/style/accueil/qui_somme_nous.css" />
    <link rel="stylesheet" type="text/css" href="/style/accueil/service_reparation.css" />
    <link rel="stylesheet" type="text/css" href="/style/accueil/service_reprise.css" />
    <link rel="stylesheet" type="text/css" href="/style/accueil/slider.css" />
    <link rel="stylesheet" type="text/css" href="/style/formulaire_contact.css" />
    <link rel="stylesheet" type="text/css" href="/style/index.css" />
    <!------------------------------------------------ onglet ------------------------------------------------------------>
    <title>Concessionnaire Agricole Neuf et Occasion - SPAI-France</title>
    <link rel="icon" href="/images/logo.ico" type="image/x-icon" />
    <!------------------------------------------------ font ------------------------------------------------------------>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
    <!------------------------------------------------ SEO ------------------------------------------------------------>
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
    <meta name="description" content="SPAI-France est un concessionnaire agricole, neuf et occasion à Malay le Grand. Kockerling, Maupu, Pronar, Grégoir &amp; Bessons et Leboulch" />
    <!-- <link rel="canonical" href="https://spai-france.com/" /> a modifier-->
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Concessionnaire Agricole Neuf et Occasion - SPAI-France" />
    <meta property="og:description" content="SPAI-France est un concessionnaire agricole, neuf et occasion à Malay le Grand. Kockerling, Maupu, Pronar, Grégoir &amp; Bessons et Leboulch" />
    <!-- <meta property="og:url" content="https://spai-france.com/" /> a modifier-->
    <meta property="og:site_name" content="SPAI-France" />
</head>
<!--------------------------------------------------- Header ---------------------------------------------------------------------------->
<?php require_once('./composants/header.php'); ?>

<section class="section_presentation">
    <h1>SPAI Concessionnaire agricole Neuf & Occasion</h1>
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="./images/accueil/slider/1.webp" class="img_slider_accueil" alt="illustration">
        </div>
        <div class="mySlides fade">
            <img src="./images/accueil/slider/2.webp" class="img_slider_accueil" alt="illustration">
        </div>
        <div class="mySlides fade">
            <img src="./images/accueil/slider/3.webp" class="img_slider_accueil" alt="illustration">
        </div>
        <div class="mySlides fade">
            <img src="./images/accueil/slider/4.webp" class="img_slider_accueil" alt="illustration">
        </div>
    </div>
</section>
<?php
//------------------------------------------------ Qui sommes nous ? --------------------------------------------------------------------->
require_once('./accueil/qui_somme_nous.php');
//----------------------------------------------- Marques -------------------------------------------------------------------------------->
require_once('./accueil/marques_renseignement.php');
//--------------------------------------------- Services réparations & maintenance ------------------------------------------------------->
require_once('./accueil/service_reparation.php');
//---------------------------------------------- Notre équipe reste à votre disposition -------------------------------------------------->
require_once('./accueil/notre_equipe.php');
//--------------------------------------------- Service Reprise & Occasion --------------------------------------------------------------->
require_once('./accueil/service_rerpise.php');
//--------------------------------------------- Nos Machines D'occasions ----------------------------------------------------------------->
require_once('./accueil/nos_machines.php');
//---------------------------------------------- Nos dernières actualités ---------------------------------------------------------------->
require_once('./composants/actualites.php');
//----------------------------------------------------------- footer --------------------------------------------------------------------->
require_once('./composants/footer.php'); ?>

<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 3500); // Change image every 2 seconds
    }
</script>