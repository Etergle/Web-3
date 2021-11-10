<?php
require_once "BaseController.php";

class TwigBaseController extends BaseController {
    public $title = "";
    public $template = "";
    public $url = ""; 
    protected \Twig\Environment $twig;
    
    public function __construct($twig, $url)
    {
        $this->twig = $twig;
        $this->url = $url; 
    }
    
    public function getContext() : array
    {
        $menu = [ 
            [
                "title" => "Главная",
                "url" => "/",
            ],
            [
                "title" => "Абстракционизм",
                "url" => "/abstractionism",
            ],
            [
                "title" => "Ар-нуво",
                "url" => "/art-nouveau",
            ],
            [
                "title" => "Авангардизм",
                "url" => "/avant-garde",
            ],
            [
                "title" => "Поп-арт",
                "url" => "/pop-art",
            ]
        ];
        
        $item = [ 
            [
                "title" => "Абстракционизм",
                "url_main" => "/abstractionism",
                "url_image" => "/abstractionism/image",
                "url_info" => "/abstractionism/info",
            ],
            [
                "title" => "Ар-нуво",
                "url_main" => "/art-nouveau",
                "url_image" => "/art-nouveau/image",
                "url_info" => "/art-nouveau/info",
            ],
            [
                "title" => "Авангардизм",
                "url_main" => "/avant-garde",
                "url_image" => "/avant-garde/image",
                "url_info" => "/avant-garde/info",
            ],
            [
                "title" => "Поп-арт",
                "url_main" => "/pop-art",
                "url_image" => "/pop-art/image",
                "url_info" => "/pop-art/info",
            ]
        ];
        $context = parent::getContext(); // вызываем родительский метод
        $context['title'] = $this->title; // добавляем title в контекст
        $active_item = array_search($this->title, array_column($item, 'title'));

        $context['menu'] = $menu;
        $context['item'] = $item;
        $context['active_item'] = $item[$active_item];
        $context['url'] = $this->url;
        return $context;
    }
    
    public function get() {
        echo $this->twig->render($this->template, $this->getContext());
    }
}