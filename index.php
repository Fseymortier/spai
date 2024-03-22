<head>
    <link rel="stylesheet" type="text/css" href="/spai/style/accueil/marques_renseignement.css">
    <link rel="stylesheet" type="text/css" href="/spai/style/accueil/nos_machines.css">
    <link rel="stylesheet" type="text/css" href="/spai/style/accueil/notre_equipe.css">
    <link rel="stylesheet" type="text/css" href="/spai/style/accueil/qui_somme_nous.css">
    <link rel="stylesheet" type="text/css" href="/spai/style/accueil/service_reparation.css">
    <link rel="stylesheet" type="text/css" href="/spai/style/accueil/service_reprise.css">
    <link rel="stylesheet" type="text/css" href="/spai/style/accueil/slider.css">
</head>
<?php $title = 'Concessionnaire Agricole Neuf et Occasion'; ?>

<?php require_once('./header.php'); ?>
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
<!------------------------------------------------ Qui sommes nous ? --------------------------------------------------------------------->
<?php require_once('./accueil/qui_somme_nous.php'); ?>
<!----------------------------------------------- Marques -------------------------------------------------------------------------------->
<?php require_once('./accueil/marques_renseignement.php'); ?>
<!--------------------------------------------- Services réparations & maintenance ------------------------------------------------------->
<?php require_once('./accueil/service_reparation.php'); ?>
<!---------------------------------------------- Notre équipe reste à votre disposition -------------------------------------------------->
<?php require_once('./accueil/notre_equipe.php'); ?>
<!--------------------------------------------- Service Reprise & Occasion --------------------------------------------------------------->
<?php require_once('./accueil/service_rerpise.php'); ?>
<!--------------------------------------------- Nos Machines D'occasions ----------------------------------------------------------------->
<?php require_once('./accueil/nos_machines.php'); ?>
<!---------------------------------------------- Nos dernières actualités ---------------------------------------------------------------->
<?php require_once('./actualites.php'); ?>
<!----------------------------------------------------------- footer --------------------------------------------------------------------->
<?php require_once('./footer.php'); ?>

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
        setTimeout(showSlides, 4000); // Change image every 2 seconds
    }
</script>