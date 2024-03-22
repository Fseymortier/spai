<head>
    <link rel="stylesheet" href="./style/page_contact.css">
</head>
<?php $title = 'Contact';
require_once('./header.php'); ?>
<section class="page_contact">
    <div class="top_page_contact">
        <h1 class="title_page_contact">Contact SPAI</h1>
    </div>
    <div class="container_items_contact">
        <div class="item_horaire">
            <img src="./images/contact/clock.svg" class="icones_contact" alt="icone horloge">
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
            <img src="./images/contact/phone.svg" class="icones_contact" alt="icone téléphone">
            <h2>Contactez-nous</h2>
            <ul>
                <li class="txt_item_contact">Par téléphone: + 33 3 86 83 77 82</li>
                <li class="txt_item_contact">Par mail: Contact@spai-france.com</li>
                <li class="txt_item_contact">Par courrier postal: Société SPAI Chem. des Grèves, 89100 Malay-le-Grand France </li>
            </ul>
        </div>
    </div>
</section>
<!---------------------------------------------- Contact ---------------------------------------------------------------->
<?php require_once('./contact.php') ?>
<!---------------------------------------------- Nos dernières actualités ---------------------------------------------------------------->
<?php require_once('./actualites.php'); ?>
<!----------------------------------------------------------- footer --------------------------------------------------------------------->
<?php require_once('./footer.php'); ?>