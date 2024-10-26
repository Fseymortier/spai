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
    <link rel="stylesheet" href="/style/reprise_materiel.css">
    <link rel="stylesheet" href="/style/formulaire_contact.css">
    <!------------------------------------------------ onglet ------------------------------------------------------------>
    <title>Reprise matériel - SPAI-France</title>
    <link rel="icon" href="/images/logo.ico" type="image/x-icon" />
    <!------------------------------------------------ font ------------------------------------------------------------>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!------------------------------------------------ SEO ------------------------------------------------------------>
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
    <meta name="description" content="Recevez une offre de reprise pour votre matériel agricole, recevez une proposition de rachat sous les 48Heures. Contactez nous dès maintenant">
    <!-- <link rel="canonical" href="https://spai-france.com/concession-materiel-agricole/reprise-materiel.php"> a modifier-->
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:type" content="article">
    <meta property="og:title" content="Reprise matériel - SPAI-France">
    <meta property="og:description" content="Recevez une offre de reprise pour votre matériel agricole, recevez une proposition de rachat sous les 48Heures. Contactez nous dés maintenant">
    <!-- <meta property="og:url" content="https://spai-france.com/concession-materiel-agricole/reprise-materiel.php"> a modifier-->
    <meta property="og:site_name" content="SPAI-France" />
</head>
<!--------------------------------------------------- Header ---------------------------------------------------------------------------->
<?php require_once('../composants/header.php'); ?>

<section class="section_top_reprise">
    <div class="top_reprise_materiel">
        <h1 class="title_reprise_materiel">Reprise de Matériel</h1>
        <p class="txt_top_reprise_materiel">SPAI est un concessionnaire spécialisé dans la reprise de matériel agricole. Située à Malay le grand, dans le département de l'Yonne (89). SPAI est en mesure de reprendre une large gamme de matériel agricole de différentes marques, telles que Kockerling, Maupu, Pronar et bien d'autres encore. Grâce à cette offre de reprise, les agriculteurs peuvent facilement se séparer de leur ancien équipement et le remplacer par des équipements neufs de qualité supérieure.</p>
        <a href="/contact.php" class="link_buton contact_buton">Contactez-nous !</a>
    </div>
</section>

<section class="section_votre_expert">
    <img src="/images/accueil/spai.webp" class="logo_spai" alt="logo SPAI">
    <div class="content_votre_expert">
        <h2 class="title_votre_expert">Votre Expert De L'occasion</h2>
        <p class="txt_votre_expert">L'activité de SPAI est fondée sur une expertise reconnue dans le domaine du matériel agricole. Nos experts sont en mesure d'analyser rapidement vos besoins et de vos proposer des solutions adaptées à votre exploitation. SPAI s'engage à offrir des services de qualité en matière de reprise de matériel agricole.</p>
        <p class="txt_votre_expert">En choisissant SPAI pour la reprise de leur matériel agricole, les agriculteurs bénéficient d'un service complet. SPAI assure la prise en charge du matériel, la dépose sur le site et la reprise des équipements usagés. L'entreprise s'engage également à fournir des équipements neufs de qualité supérieure, répondant aux normes les plus strictes en matière de sécurité et de performance.</p>
    </div>
</section>

<section class="section_contact ">
    <h2>Laissez Nous Vos Coordonnées</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <p class="champ_obligatoire">Les champs marqués d'un <span class="stars_form">*</span> sont obligatoires</p>
        <label for="prenom">Prénom <span class="stars_form">*</span></label><input class="saisie" type="text" name="prenom" id="prenom" required />
        <label for="name">Nom <span class="stars_form">*</span></label><input class="saisie" type="text" name="name" id="name" required />
        <label for="mail">Email <span class="stars_form">*</span></label><input class="saisie" type="email" name="mail" id="mail" required />
        <label for="phone">N° de téléphone <span class="stars_form">*</span></label><input class="saisie" type="tel" name="phone" id="phone" required />
        <label for="description">Décrivez votre matériel <span class="stars_form">*</span></label>
        <textarea type="textarea" name="description" id="description" placeholder="
Marque:
Modèle:
Années:
Temps d'utilisation...etc" required></textarea>
        <input type="submit" value="Envoyer" class="button_form">
    </form>
</section>
<!----------------------------------------------------------- actualites --------------------------------------------------------------------->
<?php require_once('../composants/actualites.php'); ?>
<!----------------------------------------------------------- footer --------------------------------------------------------------------->
<?php require_once('../composants/footer.php'); ?>
<!--------------------------------------------- verification des champs du formulaire ---------------------------------------------------->
<script>
    function verifyPhone(event) {
        // Récupération des valeurs des champs 
        var numTel = document.getElementById('phone').value;

        // Validation du numéro de téléphone
        if (!/^\d{10}$/.test(numTel)) {
            // Empêcher l'envoi du formulaire
            event.preventDefault();
            // Afficher un message d'erreur
            alert("Le numéro de téléphone doit contenir uniquement 10 chiffres.");
            document.getElementById("phone").value = "";

        }
    };

    function verifyMessage() {
        var maxlength = 500;
        if (this.value.length > maxlength) {
            this.value = this.value.slice(0, maxlength);
        }
    };
    document.getElementById("phone").addEventListener("change", verifyPhone);
    document.getElementById("description").addEventListener("input", verifyMessage);
</script>
<?php
//----------------------------------------------------------- Envoie du formulaire ---------------------------------------------------------------------
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/*Classe de traitement des exceptions et des erreurs*/

require '../PHPMailer-master/src/Exception.php';
/*Classe-PHPMailer*/
require '../PHPMailer-master/src/PHPMailer.php';
/*Classe SMTP nécessaire pour établir la connexion avec un serveur SMTP*/
require '../PHPMailer-master/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupération des données du formulaire
    $prenom = $_POST['prenom'];
    $nom = $_POST['name'];
    $email = $_POST['mail'];
    $telephone = $_POST['phone'];
    $message = $_POST['description'];

    try {
        // Création d'une instance de PHPMailer
        $mail = new PHPMailer(true);
        $mail->isSMTP();

        // Configuration du serveur SMTP
        $mail->Host = ""; // hote du serveur mail
        $mail->Port = ""; //port de connexion au serveur de mail
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->Username = ""; // id pour ce connecter au mail
        $mail->Password = ""; // password du mail

        // Paramètres du message
        $mail->setFrom(''); // email du destinataire
        $mail->addAddress(''); // email du destinataire
        $mail->AddReplyTo($_POST['mail'], $_POST['name']);
        $mail->isHTML(true);

        // Composition du sujet et du corps du message
        $objet_demande = "Reprise de matériel";
        $mail->Subject = "Nouveau message depuis le formulaire de contact : $title";
        $mail->Body = "Objet de la demande : $objet_demande <br> Prénom : $prenom <br> Nom : $nom <br> Email : $email <br> Téléphone : $telephone <br><br> Message : <br> $message";
        $mail->AltBody = "Objet de la demande : $objet_demande \n Prénom : $prenom \n Nom : $nom \n Email : $email \n Téléphone : $telephone \n\n Précisions de la demande : \n $message";

        // Configuration des encodages
        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';

        // Envoi du message
        $mail->send();
        // (…)
    } catch (Exception $e) {
        echo "Erreur lors de l'envoi du message : " . $e->getMessage();
    }
}
?>