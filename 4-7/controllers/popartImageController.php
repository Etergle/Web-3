<?php
require_once "TwigBaseController.php";

class popartImageController extends popartController {
    public $template = "image.twig";
    
    public function getContext() : array
    {
        
        $context = parent::getContext();
        $context['title'] = $this->title;
        $context['image'] = "/images/Andy_Warhol.png";
       
        return $context;
    }
}