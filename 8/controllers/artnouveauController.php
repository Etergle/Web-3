<?php
require_once "TwigBaseController.php";

class artnouveauController extends TwigBaseController {
    public $title = "Ар-нуво";
    public $template = "__object.twig";
    
    public function getContext() : array
    {   
        $context = parent::getContext();
        $context['title'] = $this->title;
        return $context;
    }
}