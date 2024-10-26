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
    <link rel="stylesheet" href="/style/formulaire_contact.css">
    <link rel="stylesheet" href="/style/page_contact.css">
    <!------------------------------------------------ onglet ------------------------------------------------------------>
    <title>Contact - SPAI-France</title>
    <link rel="icon" href="/images/logo.ico" type="image/x-icon" />
    <!------------------------------------------------ font ------------------------------------------------------------>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!------------------------------------------------ SEO ------------------------------------------------------------>
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
    <meta name="description" content="Retrouvez notre liste de Contact. Toute l'équipe SPAI-France se tient à votre disposition, Contactez nous pour tout renseignement.">
    <!-- <link rel="canonical" href="https://spai-france.com/concession-materiel-agricole/contact.php"> a modifier-->
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:type" content="article">
    <meta property="og:title" content="Contact - SPAI-France">
    <meta property="og:description" content="Retrouvez notre liste de Contact. Toute l'équipe SPAI-France se tient à votre disposition, Contactez nous pour tout renseignement.">
    <!-- <meta property="og:url" content="https://spai-france.com/concession-materiel-agricole/contact.php"> a modifier-->
    <meta property="og:site_name" content="SPAI-France" />
</head>
<!--------------------------------------------------- Header ---------------------------------------------------------------------------->
<?php require_once('./composants/header.php'); ?>

<section class="page_contact">
    <div class="top_page_contact">
        <h1 class="title_page_contact">Contact SPAI</h1>
    </div>
    <div class="container_items_contact">
        <div class="item_horaire">
            <img src="/images/contact/clock.svg" class="icones_contact" alt="icone horloge">
            <h2>Nos horaires d'ouverture</h2>
            <div class="content_horaires">
                <p class="txt_contact_jour">Du lundi au jeudi :</p>
                <p>8h00 - 12h00</p>
                <p>13h30 - 17h30</p>
            </div>
            <div class="content_horaires">
                <p class="txt_contact_jour">Vendredi :</p>
                <p>8h00 - 12h30</p>
            </div>
        </div>
        <div class="item_contact">
            <img src="/images/contact/phone.svg" class="icones_contact" alt="icone téléphone">
            <h2>Contactez-nous</h2>
            <ul>
                <li class="txt_item_contact">Par téléphone: + 33 3 86 83 77 82</li>
                <li class="txt_item_contact">Par mail: Contact@spai-france.com</li>
                <li class="txt_item_contact">Par courrier postal: Société SPAI Chem. des Grèves, 89100 Malay-le-Grand France </li>
            </ul>
        </div>
    </div>
</section>

<?php
//---------------------------------------------- Contact ---------------------------------------------------------------->
require_once('./composants/formulaire_contact.php');
//---------------------------------------------- Nos dernières actualités ---------------------------------------------------------------->
require_once('./composants/actualites.php');
//----------------------------------------------------------- footer --------------------------------------------------------------------->
require_once('./composants/footer.php'); ?>