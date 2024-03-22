<head>
    <link rel="stylesheet" href="./style/reprise_materiel.css">
</head>
<?php $title = 'Reprise matériel';
require_once('./header.php'); ?>
<section class="section_top_reprise">
    <div class="top_reprise_materiel">
        <h1 class="title_reprise_materiel">Reprise de Matériel</h1>
        <p class="txt_top_reprise_materiel">SPAI est un concessionnaire spécialisé dans la reprise de matériel agricole. Située à Malay le grand, dans le département de l'Yonne (89). SPAI est en mesure de reprendre une large gamme de matériel agricole de différentes marques, telles que Kockerling, Maupu, Pronar et bien d'autres encore. Grâce à cette offre de reprise, les agriculteurs peuvent facilement se séparer de leur ancien équipement et le remplacer par des équipements neufs de qualité supérieure.</p>
        <a href="./page_contact.php" class="link_buton contact_buton">Contactez-nous !</a>
    </div>
</section>

<section class="section_votre_expert">
    <img src="/spai/images/accueil/spai.webp" class="logo_spai" alt="logo SPAI">
    <div class="content_votre_expert">
        <h2 class="title_votre_expert">Votre Expert De L'occasion</h2>
        <p class="txt_votre_expert">L'activité de SPAI est fondée sur une expertise reconnue dans le domaine du matériel agricole. Nos experts sont en mesure d'analyser rapidement vos besoins et de vos proposer des solutions adaptées à votre exploitation. SPAI s'engage à offrir des services de qualité en matière de reprise de matériel agricole.</p>
        <p class="txt_votre_expert">En choisissant SPAI pour la reprise de leur matériel agricole, les agriculteurs bénéficient d'un service complet. SPAI assure la prise en charge du matériel, la dépose sur le site et la reprise des équipements usagés. L'entreprise s'engage également à fournir des équipements neufs de qualité supérieure, répondant aux normes les plus strictes en matière de sécurité et de performance.</p>
    </div>
</section>

<section class="form_reprise">
    <div class="container_contact">
        <h2>Laissez Nous Vos Coordonnées</h2>
        <p class="txt_obligatoire">Les champs marqués d'un <span class="stars_form">*</span> sont obligatoires</p>
        <form action="">
            <label for="prenom">Prénom <span class="stars_form">*</span></label><input type="text" name="prenom" id="prenom" required />
            <label for="name">Nom <span class="stars_form">*</span></label><input type="text" name="name" id="name" required />
            <label for="mail">Email <span class="stars_form">*</span></label><input type="email" name="mail" id="mail" required />
            <label for="phone"> Tél <span class="stars_form">*</span></label><input type="tel" name="phone" id="phone" required />
            <label for="description">Décrivez votre matériel <span class="stars_form">*</span></label><textarea type="textarea" name="description" id="description" placeholder="Marque:
Modèle:
Années:
Temps d'utilisation...etc" required></textarea>
            <input type="submit" value="Envoyer" class="button_form">
        </form>
    </div>
</section>
<!----------------------------------------------------------- actualites --------------------------------------------------------------------->
<?php require_once('./actualites.php'); ?>
<!----------------------------------------------------------- footer --------------------------------------------------------------------->
<?php require_once('./footer.php'); ?>