<?php


$url = $_SERVER['REQUEST_URI'];
$path = parse_url($url, PHP_URL_PATH); // Extraction du chemin de l'URL
$parts = explode('/', $path); // Découpage du chemin en parties
$page = '/' . end($parts); // Extraction de la dérniére partie du chemin
// $page contient maintenant la partie de l'URL après le dernier /

// Traiter la route demandée
switch ($page) {
    case '/':
    case '':
    case '/home':
    case '/index':
        require_once 'controller/homeController.php';
        $controller = new HomeController();
        $controller->home();
        break;
    case '/index':
        require_once 'controller/index.php';
        break;
    case '/colorAmbree':
        require_once 'controller/colorAmbree.php';
        break;
    case '/colorBlonde':
        require_once 'controller/colorBlonde.php';

        break;
    case '/colorBrune':
        require_once 'controller/colorBrune.php';
        break;
    case '/CrudArticle':
        require_once 'controller/CrudArticle.php';
        break;
    case '/Crudcolor':
        require_once 'controller/Crudcolor.php';
        break;
    case '/colorBlanche':
        require_once 'controller/colorBlanche.php';
        break;
    default:
        // Route non trouvée, afficher une page d'erreur
        require_once 'controller/404.php';
        break;
}
