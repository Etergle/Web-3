<?php
require_once "TwigBaseController.php";

class avantgardeImageController extends avantgardeController {
    public $template = "image.twig";
    
    public function getContext() : array
    {
        
        $context = parent::getContext();
        $context['title'] = $this->title;
        $context['image'] = "/images/Marcel_Duchamp.png";
       
        return $context;
    }
}