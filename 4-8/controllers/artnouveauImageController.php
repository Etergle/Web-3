<?php
require_once "TwigBaseController.php";

class artnouveauImageController extends artnouveauController {
    public $template = "image.twig";
    
    public function getContext() : array
    {
        
        $context = parent::getContext();
        $context['title'] = $this->title;
        $context['image'] = "/images/Alphonse_Mucha.png";
       
        return $context;
    }
}