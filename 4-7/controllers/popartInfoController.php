<?php
require_once "TwigBaseController.php";

class popartInfoController extends popartController {
    public $template = "info.twig";
    
    public function getContext() : array
    {
        $context = parent::getContext();
        $context['title'] = $this->title;
        $context['info'] = "Поп-арт (англ. pop art, сокращение от popular art — популярное или естественное искусство) — 
        направление в изобразительном искусстве Западной Европы и США конца 1950—1960-х годов, 
        возникшее как реакция отрицания на абстрактный экспрессионизм.
        <br>
        В качестве основного предмета 
        и образа поп-арт использовал образы продуктов потребления. Фактически это направление в искусстве 
        подменило традиционное изобразительное творчество — на демонстрацию тех или иных объектов массовой 
        культуры или вещественного мира.";
       
        return $context;
    }
}