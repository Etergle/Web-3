<?php
require_once "TwigBaseController.php";

class artnouveauInfoController extends artnouveauController {
    public $template = "info.twig";
    
    public function getContext() : array
    {
        $context = parent::getContext();
        $context['title'] = $this->title;
        $context['info'] = "Многожанровый стиль, появившийся в результате творческой переработки художниками культурного наследия прошлого. 
        <br>
        Его характерной особенностью стали изогнутые и волнистые линии, придающие изображению изящество и воздушную легкость. 
        Четкие контуры, летящие формы и динамичные узоры делают стилистику ар-нуво хорошо узнаваемой.";
       
        return $context;
    }
}