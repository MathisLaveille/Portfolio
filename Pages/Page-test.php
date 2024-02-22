<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Veille Technologique</title>
</head>
<body>
    <h1>Dernières Actualités Technologiques</h1>
    <ul>
    <?php
    // URL du flux RSS
    $rss_feed_url = 'https://javascript.developpez.com/index/rss';

    // Fonction pour récupérer et parser le flux RSS
    function parseRSS($url) {
        $rss = simplexml_load_file($url);
        $items = array();
        foreach ($rss->channel->item as $item) {
            $items[] = array(
                'title' => (string) $item->title,
                'link' => (string) $item->link,
                'description' => (string) $item->description
            );
        }
        return $items;
    }

    // Récupération du flux RSS
    $rss_items = parseRSS($rss_feed_url);

    // Affichage des articles
    foreach ($rss_items as $item) {
        echo "<li><a href='{$item['link']}' target='_blank'>{$item['title']}</a><br>{$item['description']}</li>";
    }
    ?>
    </ul>
</body>
</html>
