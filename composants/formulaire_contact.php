<section class="section_contact">
    <h2>Contactez Nous !</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <p class="champ_obligatoire">Les champs marqués d'une <span class="stars_form">*</span> sont obligatoires</p>
        <label for="name">Nom <span class="stars_form">*</span></label><input class="saisie" type="text" name="name" id="name" required />
        <label for="prenom">Prénom <span class="stars_form">*</span></label><input class="saisie" type="text" name="prenom" id="prenom" required />
        <label for="mail">Email <span class="stars_form">*</span></label><input class="saisie" type="email" name="mail" id="mail" required />
        <label for="phone">N° de téléphone <span class="stars_form">*</span></label><input class="saisie" type="tel" name="phone" id="phone" required />
        <label for="service">A quel service s'adresse votre demande ? <span class="stars_form">*</span></label>
        <select name="service" id="service" required>
            <option value="">Choisir une option</option>
            <option value="Achat de matériel">Achat de matériel</option>
            <option value="Reprise de matériel">Reprise de matériel</option>
            <option value="Service Réparation & Hydraulique">Service Réparation & Hydraulique</option>
            <option value="Pièces détachées">Pièces détachées</option>
            <option value="Autre">Autre...</option>
        </select>
        <label for="message">Message <span class="stars_form">*</span></label><textarea type="textarea" name="message" id="message" required></textarea>
        <input type="submit" value="Envoyer" class="button_form">
    </form>
</section>
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
        var maxlength = 1000;
        if (this.value.length > maxlength) {
            this.value = this.value.slice(0, maxlength);
        }
    };

    document.getElementById("message").addEventListener("input", verifyMessage);
    document.getElementById("phone").addEventListener("change", verifyPhone);
</script>
<?php
//----------------------------------------------------------- Envoie du formulaire ---------------------------------------------------------------------
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/*Classe de traitement des exceptions et des erreurs*/

require_once(__DIR__ . '/../PHPMailer-master/src/Exception.php');
/*Classe-PHPMailer*/
require_once(__DIR__ . '/../PHPMailer-master/src/PHPMailer.php');
/*Classe SMTP nécessaire pour établir la connexion avec un serveur SMTP*/
require_once(__DIR__ . '/../PHPMailer-master/src/SMTP.php');


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupération des données du formulaire 
    $objet_demande = $_POST['service'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['name'];
    $email = $_POST['mail'];
    $telephone = $_POST['phone'];
    $message = $_POST['message'];
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