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

if ($url == "/") {
    $title = "Главная";
    $template = "main.twig";
} elseif (preg_match("#/abstractionism#", $url)) {
    $title = "Абстракционизм";
    $template = "image.twig";
    $context['image'] = "/images/Kazimir_Malevich.png";
} elseif (preg_match("#/art-nouveau#", $url)) {
    $title = "Ар-нуво";
    $template = "image.twig";
    $context['image'] = "/images/Alphonse_Mucha.png";
}

$context['title'] = $title;

echo $twig->render($template, $context);