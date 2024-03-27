<head>
    <link rel="stylesheet" type="text/css" href="/spai/style/contact2.css">
</head>
<section class="section_contact">
    <h2 class="title_form">Contactez nous !</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <p class="champ_obligatoire">Les champs marqués d'un <span class="stars_form">*</span> sont obligatoires</p>
        <div class="container_checkbox">
            <label for="objet_demande" class="demande">Quel est l'objet de votre demande ?<span class="stars_form">*</span></label><br>
            <div class="items_radio">
                <input type="radio" id="mat_neuf" name="choix" value="Matériel neuf" required>
                <label for="mat_neuf" class="label_choix">Matériel neuf</label>
            </div>
            <div class="items_radio">
                <input type="radio" id="occasion" name="choix" value="Occasion" required>
                <label for="occasion" class="label_choix">Occasion</label>
            </div>
            <div class="items_radio">
                <input type="radio" id="reprise_materiel" name="choix" value="Reprise de matériel" required>
                <label for="reprise_materiel" class="label_choix">Reprise de matériel</label>
            </div>
            <div class="items_radio">
                <input type="radio" id="service_reparation" name="choix" value="Service & Réparation" required>
                <label for="service_reparation" class="label_choix">Service & Réparation</label>
            </div>
            <div class="items_radio">
                <input type="radio" id="piece_detachee" name="choix" value="Pièce détachée" required>
                <label for="piece_detachee" class="label_choix">Pièce détachée</label>
            </div>
            <div class="items_radio">
                <input type="radio" id="autre" name="choix" value="Autre" required>
                <label for="autre" class="label_choix">Autre...</label>
            </div>
        </div>
        <div class="container_prenom_nom">
            <div class="item_prenom"><label for="prenom">Prénom <span class="stars_form">*</span></label><input type="text" name="prenom" id="prenom" required /></div>
            <div class="item_nom"><label for="name">Nom <span class="stars_form">*</span></label><input type="text" name="name" id="name" required /></div>
        </div>
        <div class="container_mail_phone">
            <div class="item_mail"><label for="mail">Email <span class="stars_form">*</span></label><input type="email" name="mail" id="mail" /></div>
            <div class="item_phone"><label for="phone">N° de téléphone <span class="stars_form">*</span></label><input type="tel" name="phone" id="phone" required /></div>
        </div>
        <div class="item_message"><label for="message">Précisez votre demande</label><textarea type="textarea" name="message" id="message" required></textarea></div>
        <input type="submit" value="Envoyer" class="button_form">
    </form>
</section>
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

        $objet_demande = $_POST['choix'];
        $prenom = $_POST['prenom'];
        $nom = $_POST['name'];
        $email = $_POST['mail'];
        $telephone = $_POST['phone'];
        $message = $_POST['message'];

        $mail->Subject = "Nouveau message depuis le formulaire de contact : $title";
        $mail->Body = "Objet de la demande : $objet_demande <br> Prénom : $prenom <br> Nom : $nom <br> Email : $email <br> Téléphone : $telephone <br><br> Message : <br> $message";
        $mail->AltBody = "Objet de la demande : $objet_demande \n Prénom : $prenom \n Nom : $nom \n Email : $email \n Téléphone : $telephone \n\n Précisions de la demande : \n $message";


        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';

        $mail->send();
        // (…)
    } catch (Exception $e) {
        echo "Mailer Error: " . $e->getMessage();
    }
}
?>