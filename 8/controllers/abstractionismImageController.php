<?php
require_once "TwigBaseController.php";

class abstractionismImageController extends abstractionismController {
    public $template = "image.twig";
    
    public function getContext() : array
    {
        
        $context = parent::getContext();
        $context['title'] = $this->title;
        $context['image'] = "/images/Kazimir_Malevich.png";
       
        return $context;
    }
}