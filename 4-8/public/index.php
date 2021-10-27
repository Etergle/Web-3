<?php
require_once "../vendor/autoload.php";
require_once "../controllers/MainController.php";
require_once "../controllers/abstractionismController.php";
require_once "../controllers/abstractionismImageController.php";
require_once "../controllers/abstractionismInfoController.php";
require_once "../controllers/artnouveauController.php";
require_once "../controllers/artnouveauImageController.php";
require_once "../controllers/artnouveauInfoController.php";
require_once "../controllers/avantgardeController.php";
require_once "../controllers/avantgardeImageController.php";
require_once "../controllers/avantgardeInfoController.php";
require_once "../controllers/popartController.php";
require_once "../controllers/popartImageController.php";
require_once "../controllers/popartInfoController.php";

$loader = new \Twig\Loader\FilesystemLoader('../views');
$twig = new \Twig\Environment($loader);
$url  = $_SERVER["REQUEST_URI"];

$context = [];
$controller = null;

if ($url == "/") {
    $controller = new MainController($twig, $url);
} elseif (preg_match("#/abstractionism#", $url)) {
    $controller = new abstractionismController($twig, $url);
      
    if (preg_match("#^/abstractionism/image#", $url)) {
        $controller = new abstractionismImageController($twig, $url);
    } elseif (preg_match("#^/abstractionism/info#", $url)) {
        $controller = new abstractionismInfoController($twig, $url);
    } 
} elseif (preg_match("#/artnouveau#", $url)) {
    $controller = new artnouveauController($twig, $url);
    
    if (preg_match("#^/artnouveau/image#", $url)) {
        $controller = new artnouveauImageController($twig, $url);
    } elseif (preg_match("#^/artnouveau/info#", $url)) {
        $controller = new artnouveauInfoController($twig, $url);
    } 
} elseif (preg_match("#/avantgarde#", $url)) {
    $controller = new avantgardeController($twig, $url);
      
    if (preg_match("#^/avantgarde/image#", $url)) {
        $controller = new avantgardeImageController($twig, $url);
    } elseif (preg_match("#^/avantgarde/info#", $url)) {
        $controller = new avantgardeInfoController($twig, $url);
    } 
} elseif (preg_match("#/popart#", $url)) {
    $controller = new popartController($twig, $url);
    
    if (preg_match("#^/popart/image#", $url)) {
        $controller = new popartImageController($twig, $url);
    } elseif (preg_match("#^/popart/info#", $url)) {
        $controller = new popartInfoController($twig, $url);
    } 
}

if ($controller) {
    $controller->get();
}