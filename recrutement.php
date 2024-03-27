<head>
    <link rel="stylesheet" type="text/css" href="./style/recrutement.css">
</head>
<?php
$title = 'Recrutement';
require_once('./header.php'); ?>
<section class="section_contact">
    <h1 class="title_recrutement">Programme de Recrutement SPAI</h1>
    <div class="container_presentation_recrutement">
        <img src="./images/accueil/spai.webp" class="logo_spai_contact" alt="logo spai">
        <div class="container_txt_contact_presentation">
            <p class="txt_contact_presentation">Dans le cadre de son développement d'activité, La société SPAI engage une phase de recrutement et est à la recherche de mécanicien polyvalent et de commerciaux terrain ayant déjà une première approche du domaine agricole. Rigoureux et organisé, Vous serez en première ligne lors des démonstrations et mise en route des machines vendues, mais également en charge des réparations et changement de pièces d'usures. Aucun diplôme n'est requis. Nous recherchons avant tout des personnes compétentes et/ou des passionnées.</p>
            <p class="txt_contact_presentation">Avantages : <br>
                - Voiture de fonction prévu pour les interventions et le démarchage.<br>
                - Rémunération attractive<br>
                - Evolution possible au sein de l'entreprise.</p>
        </div>
    </div>
    <form action="" method="POST" enctype="multipart/form-data">
        <p class="champ_obligatoire">Les champs marqués d'un <span class="stars_form">*</span> sont obligatoires</p>
        <h2 class="title_infos_perso">Informations personnelles</h2>
        <div class="container_items_form">
            <div class="items_infos"><label for="prenom">Prénom <span class="stars_form">*</span></label><input type="text" name="prenom" id="prenom" required /></div>
            <div class="items_infos"><label for="name">Nom <span class="stars_form">*</span></label><input type="text" name="name" id="name" required /></div>
        </div>
        <label for="mail">Email <span class="stars_form">*</span></label><input type="email" name="mail" id="mail" />
        <label for="phone">N° de téléphone <span class="stars_form">*</span></label><input type="tel" name="phone" id="phone" required />
        <label for="adresse">Adresse <span class="stars_form">*</span></label><input type="text" name="adresse" id="adresse" required />
        <label for="adresse_complement">Complément d'adresse</label><input type="text" name="adresse_complement" id="adresse_complement" />
        <div class="container_items_form">
            <div class="items_adresse"><label for="ville">Ville <span class="stars_form">*</span></label><input type="text" name="ville" id="ville" /></div>
            <div class="items_adresse"><label for="code_postale">Code postale <span class="stars_form">*</span></label><input type="text" name="code_postale" id="code_postale" required /></div>
            <div class="items_adresse"><label for="pays">Pays <span class="stars_form">*</span></label><input type="text" name="pays" id="pays" required /></div>
        </div>
        <h2 class="title_en_bref">En Bref</h2>
        <label for="poste">Poste occupé <span class="stars_form">*</span></label><input type="text" name="poste" id="poste" required />
        <div class="container_items_form">
            <div class="items_date"><label for="date_debut">Date de début de votre ancien poste <span class="stars_form">*</span></label><input type="date" id="date_debut" name="date_debut"></div>
            <div class="items_date"><label for="date_fin">Date de fin de votre ancien poste <span class="stars_form">*</span></label><input type="date" id="date_fin" name="date_fin"></div>
        </div>
        <label for="message">Dites nous en plus sur vous <span class="stars_form">*</span></label><textarea type="textarea" name="message" id="message" required></textarea>
        <div class="container_radio">
            <label for="cv" id="cv">Avez vous envoyé votre CV par Mail ?<span class="stars_form">*</span></label>
            <div class="items_radio"><input type="radio" id="oui" name="case" value="Oui" required><label for="oui">Oui</label></div>
            <div class="items_radio"><input type="radio" id="non" name="case" value="Non" required><label for="non">Non</label></div>
        </div>
        <input type="submit" value="Envoyer" class="button_form">
    </form>
</section>
<!---------------------------------------------- Nos dernières actualités ---------------------------------------------------------------->
<?php require_once('./actualites.php'); ?>
<!----------------------------------------------------------- footer --------------------------------------------------------------------->
<?php require_once('./footer.php'); ?>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/*Classe de traitement des exceptions et des erreurs*/

require 'D:/programmation/wamp64/www/spai/PHPMailer-master/src/Exception.php';
/*Classe-PHPMailer*/
require 'D:/programmation/wamp64/www/spai/PHPMailer-master/src/PHPMailer.php';
/*Classe SMTP nécessaire pour établir la connexion avec un serveur SMTP*/
require 'D:/programmation/wamp64/www/spai/PHPMailer-master/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['mail'];
    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();

        $mail->Host = "smtp.ionos.fr";
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->Username = "florian.s@miinde.fr";
        $mail->Password = "iybDH-eif86716se+54";

        $mail->setFrom('florian.s@miinde.fr');
        $mail->addAddress('florian.s@miinde.fr');
        $mail->AddReplyTo($_POST['mail'], $_POST['name']);
        $mail->isHTML(true);

        $prenom = $_POST['prenom'];
        $nom = $_POST['name'];
        $email = $_POST['mail'];
        $telephone = $_POST['phone'];

        $adress = $_POST['adresse'];
        $adress_complement = $_POST['adresse_complement'];
        $ville = $_POST['ville'];
        $code_postale = $_POST['code_postale'];
        $pays = $_POST['pays'];

        $poste = $_POST['poste'];
        $date_debut = $_POST['date_debut'];
        $date_fin = $_POST['date_fin'];
        $message = $_POST['message'];

        $cv = $_POST['case'];

        $mail->Subject = "Nouveau message depuis le formulaire de recrutement";
        $mail->Body = "Prénom : $prenom <br> Nom : $nom <br> Email : $email <br> Téléphone : $telephone <br><br> 
        Adresse : $adress <br> Complément d'adresse : $adress_complement <br> Ville : $ville <br> Code Postale : $code_postale <br> Pays : $pays <br><br>
        Poste occupé : $poste <br> Date de début : $date_debut <br> Date de fin : $date_fin <br> CV envoyé par mail : $cv
        <br><br> Message : <br> $message";

        $mail->AltBody = "Prénom : $prenom \n Nom : $nom \n Email : $email \n Téléphone : $telephone \n\n 
        Adresse : $adress \n Complément d'adresse : $adress_complement \n Ville : $ville \n Code Postale : $code_postale \n Pays : $pays \n\n
        Poste occupé : $poste \n Date de début : $date_debut \n Date de fin : $date_fin \n CV envoyé par mail : $cv
        \n\n Message : \n $message";


        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';

        $mail->send();
        // (…)
    } catch (Exception $e) {
        echo "Mailer Error: " . $e->getMessage();
    }
}
?>