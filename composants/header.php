<body>
    <header>
        <nav>
            <a href="/index.php" class="link_accueil"> <img class="logo_nav" alt="logo SPAI" />
            </a>
            <script>
                function updateLogo() {
                    let $logo = "";
                    if (window.innerWidth >= 854) {
                        $logo = "/images/accueil/spai.webp";
                    } else {
                        $logo = "/images/logo.webp";
                    }
                    document.querySelector('.logo_nav').src = $logo;
                }
                window.addEventListener("resize", updateLogo);
                updateLogo();
            </script>
            <div class="menu_sandwich"><img class="img_menu_sandwich" src="/images/menu_sandwich.svg" alt="icone menu hamburger"></div>
            <div class="container_menu">
                <div class="item_menu">
                    <a href="#" class="menu_materiel">Matériel Agricole <img src="/images/header/arrow.svg" class="arrow_header" alt="icone flèche"></a>
                    <div class="first_menu_materiel first_menu">
                        <a href="#" class="link_first_menu link_neuf">Neuf <img src="/images/header/arrow-right.svg" class="arrow_header arrow_right" alt="icone flèche"></a>
                        <div class="second_menu">
                            <a href="/concession-materiel-agricole/maupu.php" class="link_menu_marques">MAUPU</a>
                            <a href="/concession-materiel-agricole/kockerling.php" class="link_menu_marques">KOCKERLING</a>
                            <a href="/concession-materiel-agricole/pronar.php" class="link_menu_marques">PRONAR</a>
                            <a href="/concession-materiel-agricole/gregoire-besson.php" class="link_menu_marques">GRÉGOIRE & BESSON</a>
                            <a href="/concession-materiel-agricole/alpego.php" class="link_menu_marques">ALPEGO</a>
                        </div>
                        <a href="https://www.agriaffaires.com/pros/list/1834163-0/1/spai.html" class="link_first_menu">Occasion</a>
                    </div>
                </div>
                <div class="item_menu">
                    <a href="#" class="menu_service">Service <img src="/images/header/arrow.svg" class="arrow_header" alt="icone flèche"></a>
                    <div class="first_menu_service first_menu">
                        <a href="/concession-materiel-agricole/reprise_materiel.php" class="link_first_menu">Reprise Matériel</a>
                        <a href="/contact.php" class="link_first_menu">Contact</a>
                    </div>
                </div>
                <div class="item_menu">
                    <a href="#" class="menu_apropos">En savoir plus <img src="/images/header/arrow.svg" class="arrow_header" alt="icone flèche"></a>
                    <div class="first_menu_apropos first_menu">
                        <a href="/recrutement.php" class="link_first_menu">Recrutement SPAI</a>
                        <a href="/mentions_legales.php" class="link_first_menu">Mentions légales</a>
                    </div>
                </div>
            </div>
            <div class="items_reseau">
                <div class="menu_sandwich_reseau"><img class="img_menu_sandwich" src="/images/menu_sandwich_reseau.svg" alt=""></div>
                <div class="container_reseaux">
                    <a href="https://www.agriaffaires.com/pros/list/1834163-0/1/spai.html"><img src="/images/header/agriaffaire.webp" class="icone_reseaux" alt="logo agri affaire.com"></a>
                    <a href="https://www.facebook.com/TeamSPAIFrance/"><img src="/images/header/facebook.svg" class="icone_reseaux" alt="logo facebook"></a>
                    <a href="https://www.instagram.com/spai_france/"><img src="/images/header/instagram.svg" class="icone_reseaux" alt="logo instagram"></a>
                    <a href="https://www.linkedin.com/company/spai-france/about/"><img src="/images/header/linkedin.svg" class="icone_reseaux" alt="logo linkedin"></a>
                    <a href=""><img src="/images/header/mail.svg" class="icone_reseaux" alt="logo mail"></a>
                </div>
            </div>
        </nav>
    </header>