<head>
    <link rel="stylesheet" type="text/css" href="./style/recrutement.css">
</head>
<?php
$title = 'Recrutement';
require_once('./header.php'); ?>
<section class="section_contact">
    <div class="container_contact">
        <h1 class="title_contact">Programme de Recrutement SPAI</h1>
        <div class="container_contact_presentation">
            <img src="./images/accueil/spai.webp" class="logo_spai_contact" alt="logo spai">
            <div class="container_txt_contact_presentation">
                <p class="txt_contact_presentation">Dans le cadre de son développement d'activité, La société SPAI engage une phase de recrutement et est à la recherche de mécanicien polyvalent et de commerciaux terrain ayant déjà une première approche du domaine agricole. Rigoureux et organisé, Vous serez en première ligne lors des démonstrations et mise en route des machines vendues, mais également en charge des réparations et changement de pièces d'usures. Aucun diplôme n'est requis. Nous recherchons avant tout des personnes compétentes et/ou des passionnées.</p>
                <p class="txt_contact_presentation">Avantages : <br>
                    - Voiture de fonction prévu pour les interventions et le démarchage.<br>
                    - Rémunération attractive<br>
                    - Evolution possible au sein de l'entreprise.</p>
            </div>
        </div>
        <form action="">
            <p class="form_txt_obligatoire">Les champs marqués d'un <span class="stars_form">*</span> sont obligatoires</p>
            <h2 class="h2_contact">Informations personnelles</h2>
            <div class="container_items_form">
                <div class="items_prenom"><label for="prenom">Prénom <span class="stars_form">*</span></label><input type="text" name="prenom" id="prenom" required /></div>
                <div class="items_prenom"><label for="name">Nom <span class="stars_form">*</span></label><input type="text" name="name" id="name" required /></div>
            </div>
            <label for="mail">Email <span class="stars_form">*</span></label><input type="email" name="mail" id="mail" />
            <label for="phone">N° de téléphone <span class="stars_form">*</span></label><input type="tel" name="phone" id="phone" required />
            <label for="adresse">Adresse <span class="stars_form">*</span></label><input type="text" name="adresse" id="adresse" required />
            <label for="adresse_complement">Complément d'adresse</label><input type="text" name="adresse_complement" id="adresse_complement" />
            <div class="container_items_form">
                <div class="items_ville"><label for="ville">Ville <span class="stars_form">*</span></label><input type="text" name="ville" id="ville" /></div>
                <div class="items_ville"><label for="code_postale">Code postale <span class="stars_form">*</span></label><input type="text" name="code_postale" id="code_postale" required /></div>
                <div class="items_ville"><label for="pays">Pays <span class="stars_form">*</span></label><input type="text" name="pays" id="pays" required /></div>
            </div>
            <h2 class="h2_contact">En Bref</h2>
            <label for="poste">Poste occupé <span class="stars_form">*</span></label><input type="text" name="poste" id="poste" required />
            <div class="container_items_form">
                <div class="items_date"><label for="date_debut">Date de début de votre ancien poste <span class="stars_form">*</span></label><input type="date" id="date_debut" name="date_debut"></div>
                <div class="items_date"><label for="date_fin">Date de fin de votre ancien poste <span class="stars_form">*</span></label><input type="date" id="date_fin" name="date_fin"></div>
            </div>
            <label for="message">Dites nous en plus sur vous <span class="stars_form">*</span></label><textarea type="textarea" name="message" id="message" required></textarea>
            <div class="checkbox"><input type="checkbox" id="case" name="case" value="oui"><label for="case">Avez vous envoyé votre CV par Mail ?<span class="stars_form">*</span></label></div>
            <input type="submit" value="Envoyer" class="button_form">
        </form>
    </div>
</section>
<!---------------------------------------------- Nos dernières actualités ---------------------------------------------------------------->
<?php require_once('./actualites.php'); ?>
<!----------------------------------------------------------- footer --------------------------------------------------------------------->
<?php require_once('./footer.php'); ?>