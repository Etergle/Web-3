<?php
require_once "TwigBaseController.php";

class avantgardeController extends TwigBaseController {
    public $title = "Авангардизм";
    public $template = "__object.twig";
    
    public function getContext() : array
    {   
        $context = parent::getContext();
        $context['title'] = $this->title;
        return $context;
    }
}