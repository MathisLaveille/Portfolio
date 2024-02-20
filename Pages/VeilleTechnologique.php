<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathis Laveille</title>
    <link href="../Css/Style-VeilleTechnologique.css" rel="stylesheet" />
</head>

<body bgcolor="Black">

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

<br>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- Contenu de la page -->

<div class="content">
<h1 style="color:Black";>Page de veille technologique</h1>

<?php

$xml = simplexml_load_file('https://javascript.developpez.com/index/rss');

foreach ($xml -> channel -> item as $item) {

    print("<a href='{$item->link}'>'{$item->title}</a><br/>");
    print("{$item->pubDate}");
    print("{$item->description}");
    print("{$item->pubDate}");
    print("{$item->date}");
    print("{$item->enclosure}");
    echo "<br><br><br><br><br>";


    // $enclosureUrl = $item->enclosure[''];
    // print('<br/><br/>enclosureUrl = "'. $enclosureUrl .'"<br/><br/>');


}

?>

</div>

</body>
</html>

