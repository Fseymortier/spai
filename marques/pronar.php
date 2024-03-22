<?php $title = 'PRONAR';
$couleur = '#e77918';
?>

<head>
    <link rel="stylesheet" type="text/css" href="/spai/style/marques/pronar/pronar.css">
</head>
<style>
    .background,
    .dl_document {
        background-color: <?php echo $couleur; ?>;
    }
</style>
<?php require_once('../header.php'); ?>
<section class="section_presentation">
    <div class="div_top_pronar">
    </div>
    <h1>Pronar Spécialiste Bennes Agricoles & Travaux Publics</h1>
    <p class="txt_presentation_pronar">Pronar est une entreprise fondée il y a près de 30 ans dans
        la petite ville de Narew en région de Podlachie. « Pro »
        signifie production, « Nar » signifie Narew - d'où le nom
        de l'entreprise. Plus de 3 000 employés, 8 usines modernes,
        où 4 000 pièces de près de 600 tonnes d'acier sont produites
        chaque jour sur la superficie de 80 terrains de football. Dès
        le début (1988), les propriétaires ont eu une idée d'entreprise
        dans la tête. Ils voulaient avant tout mettre en œuvre des
        différents profils d'activité d'entreprise.</p>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/xq171dBOdwo?si=6RcOmK2j_ZUMam6G" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</section>
<?php require_once('./pronar/benne.php') ?>
<?php require_once('./pronar/amplirolls.php') ?>
<?php require_once('./pronar/fauchage.php') ?>
<!---------------------------------------------- Contact ---------------------------------------------------------------->
<?php require_once('../contact.php') ?>
<!---------------------------------------------- Nos dernières actualités ---------------------------------------------------------------->
<?php require_once('../actualites.php'); ?>
<!----------------------------------------------------------- footer --------------------------------------------------------------------->
<?php require_once('../footer.php'); ?>