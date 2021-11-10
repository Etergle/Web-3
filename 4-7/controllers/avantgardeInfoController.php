<?php
require_once "TwigBaseController.php";

class avantgardeInfoController extends avantgardeController {
    public $template = "info.twig";
    
    public function getContext() : array
    {
        $context = parent::getContext();
        $context['title'] = $this->title;
        $context['info'] = "Картины, написанные в стиле авангарда, не признавали общественные ценности и отражали 
        радикальные перемены в общепризнанном искусстве живописи.";
       
        return $context;
    }
}