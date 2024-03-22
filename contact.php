<head>
    <link rel="stylesheet" type="text/css" href="/spai/style/contact.css">
</head>
<section class="section_contact">
    <div class="container_contact">
        <h2>Contactez Nous !</h2>
        <p class="form_txt_obligatoire">Les champs marqués d'un <span class="stars_form">*</span> sont obligatoires</p>
        <form action="">
            <label for="name">Nom <span class="stars_form">*</span></label><input type="text" name="name" id="name" required />
            <label for="mail">Email <span class="stars_form">*</span></label><input type="email" name="mail" id="mail" required />
            <label for="phone">N° de téléphone <span class="stars_form">*</span></label><input type="tel" name="phone" id="phone" required />
            <label for="service">A quel service s'adresse votre demande ? <span class="stars_form">*</span></label>
            <select name="service" id="service" required>
                <option value="">Choisir une option</option>
                <option value="1">Achat de matériel</option>
                <option value="2">Reprise de matériel</option>
                <option value="3">Service Réparation & Hydraulique</option>
                <option value="4">Pièces détachées</option>
            </select>
            <label for="message">Message <span class="stars_form">*</span></label><textarea type="textarea" name="message" id="message" required></textarea>
            <input type="submit" value="Envoyer" class="button_form">
        </form>
    </div>
</section>