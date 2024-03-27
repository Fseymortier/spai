<head>
    <link rel="stylesheet" type="text/css" href="/spai/style/contact.css">
</head>
<section class="section_contact">
    <h2>Contactez Nous !</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <p class="champ_obligatoire">Les champs marqués d'un <span class="stars_form">*</span> sont obligatoires</p>
        <label for="name">Nom <span class="stars_form">*</span></label><input type="text" name="name" id="name" required />
        <label for="mail">Email <span class="stars_form">*</span></label><input type="email" name="mail" id="mail" required />
        <label for="phone">N° de téléphone <span class="stars_form">*</span></label><input type="tel" name="phone" id="phone" required />
        <label for="service">A quel service s'adresse votre demande ? <span class="stars_form">*</span></label>
        <select name="service" id="service" required>
            <option value="">Choisir une option</option>
            <option value="Achat de matériel">Achat de matériel</option>
            <option value="Reprise de matériel">Reprise de matériel</option>
            <option value="Service Réparation & Hydraulique">Service Réparation & Hydraulique</option>
            <option value="Pièces détachées">Pièces détachées</option>
        </select>
        <label for="message">Message <span class="stars_form">*</span></label><textarea type="textarea" name="message" id="message" required></textarea>
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

        $objet_demande = $_POST['service'];
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