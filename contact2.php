<head>
    <link rel="stylesheet" type="text/css" href="/spai/style/contact2.css">
</head>
<section class="section_contact">
    <h2 class="title_form">Contactez nous !</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <p class="form_txt_obligatoire">Les champs marqués d'un <span class="stars_form">*</span> sont obligatoires</p>
        <div class="item_checkbox">
            <label for="objet_demande" class="demande">Quel est l'objet de votre demande ?<span class="stars_form">*</span></label><br>
            <input type="radio" id="mat_neuf" name="choix" value="Matériel neuf" required>
            <label for="mat_neuf">Matériel neuf</label><br>
            <input type="radio" id="occasion" name="choix" value="Occasion" required>
            <label for="occasion">Occasion</label><br>
            <input type="radio" id="reprise_materiel" name="choix" value="Reprise de matériel" required>
            <label for="reprise_materiel">Reprise de matériel</label><br>
            <input type="radio" id="service_reparation" name="choix" value="Service & Réparation" required>
            <label for="service_reparation">Service & Réparation</label><br>
            <input type="radio" id="piece_detachee" name="choix" value="Pièce détachée" required>
            <label for="piece_detachee">Pièce détachée</label><br>
            <input type="radio" id="autre" name="choix" value="Autre" required>
            <label for="autre">Autre...</label><br>
        </div>
        <div class="items_form">
            <div class="items_prenom"><label for="prenom">Prénom <span class="stars_form">*</span></label><input type="text" name="prenom" id="prenom" required /></div>
            <div class="items_prenom"><label for="name">Nom <span class="stars_form">*</span></label><input type="text" name="name" id="name" required /></div>
        </div>
        <div class="items_form">
            <div class="items_prenom"><label for="mail">Email <span class="stars_form">*</span></label><input type="email" name="mail" id="mail" /></div>
            <div class="items_prenom"><label for="phone">N° de téléphone <span class="stars_form">*</span></label><input type="tel" name="phone" id="phone" required /></div>
        </div>
        <label for="message">Précisez votre demande</label><textarea type="textarea" name="message" id="message"></textarea>
        <input type="submit" value="Envoyer" class="button_form">
    </form>
</section>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $objet_demande = $_POST['choix'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['name'];
    $email = $_POST['mail'];
    $telephone = $_POST['phone'];
    $message = $_POST['message'];

    // Adresse e-mail où envoyer le message
    $to = "florian.s@miinde.fr";

    // Sujet de l'e-mail
    $subject = "Nouveau message depuis le formulaire de contact";

    // Corps de l'e-mail
    $body = "Objet de la demande : " . $objet_demande . "\n";
    $body .= "Prénom : " . $prenom . "\n";
    $body .= "Nom : " . $nom . "\n";
    $body .= "Email : " . $email . "\n";
    $body .= "Téléphone : " . $telephone . "\n\n";
    $body .= "Message :\n" . $message;

    // En-têtes de l'e-mail
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envoyer l'e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Votre message a été envoyé avec succès !</p>";
    } else {
        echo "<p>Une erreur s'est produite. Veuillez réessayer.</p>";
    }
}
?>