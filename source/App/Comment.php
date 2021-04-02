<?php


namespace Source\App;


use League\Plates\Engine;

class Comment
{
    /** @var Engine */
    private $view;

    public function __construct($router)
    {
        $this->view = Engine::create(
            dirname(__DIR__, 2) . "/theme/comments",
            "php"
        );

        $this->view->addData(["router" => $router]);
    }


    public function home(): void
    {
        echo $this->view->render("views/home", [
            "title" => "Sistema de Comentários"
        ]);
    }
}