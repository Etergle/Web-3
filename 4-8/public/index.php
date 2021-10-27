<?php


require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('../views');

$twig = new \Twig\Environment($loader);

$url = $_SERVER["REQUEST_URI"];

$title = "";
$template = "";

$context = [];


if ($url == "/") {
    $title = "Главная";
    $template = "main.twig";
} elseif (preg_match("#/abstractionism#", $url)) {
    $title = "Абстракционизм";
    $template = "base_image.twig";
    $context['image'] = "/images/Kazimir_Malevich.png";
} elseif (preg_match("#/art-nouveau#", $url)) {
    $title = "Ар-нуво";
    $template = "base_image.twig";
    $context['image'] = "/images/Alphonse_Mucha.png";
}

$context['title'] = $title;

echo $twig->render($template, $context);