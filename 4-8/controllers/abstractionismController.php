<?php
require_once "TwigBaseController.php";

class abstractionismController extends TwigBaseController {
    public $title = "Абстракционизм";
    public $template = "__object.twig";
    
    public function getContext() : array
    {   
        $context = parent::getContext();
        $context['title'] = $this->title;
        return $context;
    }
}