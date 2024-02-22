<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathis Laveille</title>
    <link href="../Css/Style-VeilleTechnologique.css" rel="stylesheet" />
</head>

<body bgcolor="Black">

<div class="content">
<div class="navbar">
    <!-- Liens directs vers les pages -->
    <a href="../index.html">Accueil</a>
    <a href="Presentation.html">Présentation</a>
    
    <!-- Menu déroulant pour "Page 2" -->
    <div class="dropdown">
        <button class="dropbtn">Compétences</button>
        <div class="dropdown-content">
            <a href="Programmation-Developpement.html">Programmation/Développement</a>
            <a href="Reseau.html">Réseau</a>
            <a href="Cybersecurite.html">Cybersécurité</a>
        </div>
    </div>
    
    <a href="Certification.html">Certification</a>
    <a href="VeilleTechnologique.php">Veille Technologique</a>
</div>
</div>

<br>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- Contenu de la page -->

<div class="content">
<h1 style="color:Black";>Page de veille technologique</h1>

<?php
$xml = simplexml_load_file('https://www.francetvinfo.fr/internet/securite-sur-internet.rss');

if ($xml) {
    echo '<div class="rss-feed">';
    foreach ($xml->channel->item as $item) {
        echo '<div class="rss-item">';
        echo "<h2><a href='{$item->link}'>{$item->title}</a></h2>";
        echo "<p class='pub-date'><em>{$item->pubDate}</em></p>";
        echo "<div class='description'>{$item->description}</div>";
        echo '</div>';
    }
    echo '</div>';
} else {
    echo "<p>Erreur lors du chargement du flux RSS.</p>";
}
?>

</div>

</body>
</html>