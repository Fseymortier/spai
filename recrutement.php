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
    <link rel="stylesheet" type="text/css" href="/style/formulaire_contact.css">
    <link rel="stylesheet" type="text/css" href="/style/recrutement.css">
    <!------------------------------------------------ onglet ------------------------------------------------------------>
    <title>Recrutement - SPAI-France</title>
    <link rel="icon" href="/images/logo.ico" type="image/x-icon" />
    <!------------------------------------------------ font ------------------------------------------------------------>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!------------------------------------------------ SEO ------------------------------------------------------------>
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
    <meta name="description" content="Vous cherchez un nouveau challenge ? SPAI-France recrute ! Déposez votre candidature directement sur notre site et lancez vous dans l'aventure">
    <!-- <link rel="canonical" href="https://spai-france.com/recrutement.php"> a modifier-->
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:type" content="article">
    <meta property="og:title" content="Recrutement SPAI - SPAI-France">
    <meta property="og:description" content="Vous cherchez un nouveau challenge ? SPAI-France recrute ! Déposez votre candidature directement sur notre site et lancez vous dans l'aventure">
    <!-- <meta property="og:url" content="https://spai-france.com/recrutement.php"> a modifier-->
    <meta property="og:site_name" content="SPAI-France" />
</head>
<!--------------------------------------------------- Header ---------------------------------------------------------------------------->
<?php require_once('./composants/header.php'); ?>
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
    <form id="recrutementForm" action="" method="POST" enctype="multipart/form-data">
        <p class="champ_obligatoire">Les champs marqués d'un <span class="stars_form">*</span> sont obligatoires</p>
        <h2 class="title_infos_perso">Informations personnelles</h2>
        <div class="container_items_form">
            <div class="items_infos"><label for="prenom">Prénom <span class="stars_form">*</span></label><input class="saisie" type="text" name="prenom" id="prenom" required /></div>
            <div class="items_infos"><label for="name">Nom <span class="stars_form">*</span></label><input class="saisie" type="text" name="name" id="name" required /></div>
        </div>
        <label for="mail">Email <span class="stars_form">*</span></label><input class="saisie" type="email" name="mail" id="mail" />
        <label for="phone">N° de téléphone <span class="stars_form">*</span></label><input class="saisie" type="tel" name="phone" id="phone" required />
        <label for="adresse">Adresse <span class="stars_form">*</span></label><input class="saisie" type="text" name="adresse" id="adresse" required />
        <label for="adresse_complement">Complément d'adresse</label><input class="saisie" type="text" name="adresse_complement" id="adresse_complement" />
        <div class="container_items_form">
            <div class="items_adresse">
                <label for="pays">Pays <span class="stars_form">*</span></label>
                <select name="pays" id="pays" required>
                    <option value="">Sélectionnez votre pays</option>
                    <?php
                    // récupère la liste des Pays au format csv
                    $liste_pays = file_get_contents('documents/liste_de_pays.csv');

                    // Divisez les pays en un tableau
                    $pays_array = explode("\n", $liste_pays);

                    // Parcourir les pays et les ajouter à la liste déroulante
                    foreach ($pays_array as $pays) {
                        // Divisez chaque ligne CSV en un tableau
                        $pays_data = explode(",", $pays);

                        // Sélectionnez le nom français du pays à partir de l'index 4 et supprime les guillemets
                        $nom_fr_pays = trim($pays_data[4], '"');

                        // Afficher l'option dans la liste déroulante
                        echo "<option value='" . trim($nom_fr_pays) . "'>" . trim($nom_fr_pays) . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="items_adresse"><label for="ville">Ville <span class="stars_form">*</span></label><input class="saisie" type="text" name="ville" id="ville" /></div>
            <div class="items_adresse"><label for="code_postale">Code postale <span class="stars_form">*</span></label><input class="saisie" type="text" name="code_postale" id="code_postale" required /></div>
        </div>
        <h2 class="title_en_bref">En Bref</h2>
        <label for="poste">Poste occupé <span class="stars_form">*</span></label><input class="saisie" type="text" name="poste" id="poste" required />
        <div class="container_items_form">
            <div class="items_date"><label for="date_debut">Date de début de votre ancien poste <span class="stars_form">*</span></label><input class="saisie" type="date" id="date_debut" name="date_debut"></div>
            <div class="items_date"><label for="date_fin">Date de fin de votre ancien poste <span class="stars_form">*</span></label><input class="saisie" type="date" id="date_fin" name="date_fin"></div>
        </div>
        <label for="message">Dites nous en plus sur vous <span class="stars_form">*</span></label><textarea type="textarea" name="message" id="message" placeholder="Maximum 1500 caractères" required></textarea>
        <div class="container_cv">
            <label for="cv" id="cv">Avez vous envoyé votre CV par Mail ?<span class="stars_form">*</span></label>
            <div class="container_items_cv">
                <div class="items_cv"><input class="saisie" type="radio" id="oui" name="case" value="Oui" required><label for="oui">Oui</label></div>
                <div class="items_cv"><input class="saisie" type="radio" id="non" name="case" value="Non" required><label for="non">Non</label></div>
            </div>
        </div>
        <input type="submit" value="Envoyer" class="button_form">
    </form>
</section>
<?php
//---------------------------------------------- Nos dernières actualités ---------------------------------------------------------------->
require_once('./composants/actualites.php');
//----------------------------------------------------------- footer --------------------------------------------------------------------->
require_once('./composants/footer.php'); ?>
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

    function verifyPays() {
        var pays = document.getElementById('pays').value
        if (pays != "France") {
            document.getElementById('code_postale').value = "00000"
        } else {
            document.getElementById('code_postale').value = ""
        }
    }

    function verifyCodePostale(event) {
        // Récupération des valeurs des champs 
        var codePostale = document.getElementById('code_postale').value
        // Validation du code postale
        if (!/^\d{5}$/.test(codePostale)) {
            // Empêcher l'envoi du formulaire
            event.preventDefault();
            // Afficher un message d'erreur
            alert("Le code postale doit contenir uniquement 5 chiffres.");
            document.getElementById("code_postale").value = "";
        }
    };

    function verifyDate(event) {
        // Récupération des valeurs des champs 
        var dateDebut = new Date(document.getElementById("date_debut").value);
        var dateFin = new Date(document.getElementById("date_fin").value);

        // Validation des dates
        if (dateDebut > dateFin) {
            // Empêcher l'envoi du formulaire
            event.preventDefault();
            // Afficher un message d'erreur
            alert("La date de début doit être antérieure à la date de fin.");
            document.getElementById("date_debut").value = "";
            document.getElementById("date_fin").value = "";
        }
    };

    function verifyMessage() {
        var maxlength = 1500;
        if (this.value.length > maxlength) {
            this.value = this.value.slice(0, maxlength);
        }
    };
    document.getElementById("phone").addEventListener("change", verifyPhone);
    document.getElementById("pays").addEventListener("change", verifyPays);
    document.getElementById("code_postale").addEventListener("change", verifyCodePostale);
    document.getElementById("date_debut").addEventListener("change", verifyDate);
    document.getElementById("date_fin").addEventListener("change", verifyDate);
    document.getElementById("message").addEventListener("input", verifyMessage);
</script>
<?php
//----------------------------------------------------------- Envoie du formulaire ---------------------------------------------------------------------
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/*Classe de traitement des exceptions et des erreurs*/

require './PHPMailer-master/src/Exception.php';
/*Classe-PHPMailer*/
require './PHPMailer-master/src/PHPMailer.php';
/*Classe SMTP nécessaire pour établir la connexion avec un serveur SMTP*/
require './PHPMailer-master/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupération des données du formulaire    
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
    if ($date_debut >= $date_fin) {
        echo "La date de début doit être antérieure à la date de fin.";
    } else {
        try {
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
            $mail->Subject = "Nouveau message depuis le formulaire de recrutement";
            $mail->Body = "Prénom : $prenom <br> Nom : $nom <br> Email : $email <br> Téléphone : $telephone <br><br> 
        Adresse : $adress <br> Complément d'adresse : $adress_complement <br> Ville : $ville <br> Code Postale : $code_postale <br> Pays : $pays <br><br>
        Poste occupé : $poste <br> Date de début : $date_debut <br> Date de fin : $date_fin <br> CV envoyé par mail : $cv
        <br><br> Message : <br> $message";

            $mail->AltBody = "Prénom : $prenom \n Nom : $nom \n Email : $email \n Téléphone : $telephone \n\n 
        Adresse : $adress \n Complément d'adresse : $adress_complement \n Ville : $ville \n Code Postale : $code_postale \n Pays : $pays \n\n
        Poste occupé : $poste \n Date de début : $date_debut \n Date de fin : $date_fin \n CV envoyé par mail : $cv
        \n\n Message : \n $message";

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
}
?>