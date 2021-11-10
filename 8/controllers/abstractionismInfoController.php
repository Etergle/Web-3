<?php
require_once "TwigBaseController.php";

class abstractionismInfoController extends abstractionismController {
    public $template = "info.twig";
    
    public function getContext() : array
    {
        $context = parent::getContext();
        $context['title'] = $this->title;
        $context['info'] = "Абстракционизм подразумевает отказ от изображения реальных вещей и форм. <br>
        Жанр направлен на то, чтобы вызвать у человека определённые эмоции и ассоциации. 
        Для этих целей картины в абстрактном стиле пытаются выразить гармонию цвета, форм,  линий, пятен и так далее. ";
       
        return $context;
    }
}