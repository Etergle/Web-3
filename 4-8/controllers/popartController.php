<?php
require_once "TwigBaseController.php";

class popartController extends TwigBaseController {
    public $title = "Поп-арт";
    public $template = "__object.twig";
    
    public function getContext() : array
    {   
        $context = parent::getContext();
        $context['title'] = $this->title;
        return $context;
    }
}