<?php

// source.xml contient un document XML avec un élément racine
if (file_exists('source.xml')) {
    $xml = simplexml_load_file('source.xml');
} else {
    exit('Echec lors de l\'ouverture du fichier source.xml.');
}
/* on crée une variable $page qui va prendre une valeur avec GET
 * on contrôle que la variable existe si elle existe on lui attribue la valeur du link */
if (isset($_GET['page'])) {
    $page = intval(htmlspecialchars($_GET['page']));
} else {
    $page = 0;
}
// on définit une variable $title qui va prendre la valeur de title du fichier xml en fonction de l'id de la page
$content = $xml->page[$page]->content;
$title = $xml->page[$page]->title;
$menu = $xml->page[$page]->menu;
$allPage = $xml->page;
