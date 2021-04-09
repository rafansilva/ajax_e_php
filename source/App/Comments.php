<?php


namespace Source\App;

use Source\Models\Comment;

use League\Plates\Engine;

class Comments
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
            "title" => "Sistema de Comentários",
            "comments" => (new Comment())->find()->order("created_at DESC")->fetch(true)
        ]);
    }

    public function create(array $data): void
    {
        $data = filter_var_array($data,FILTER_SANITIZE_STRING);

        if (in_array("", $data)){
            $json["message"] = message("error", "Informe seu nome e comentário");
            echo json_encode($json);
            return;
        }

        $comment = new Comment();
        $comment->name = $data["name"];
        $comment->comment = $data["comment"];

        $comment->save();

        $json["comment"] = $this->view->render("views/comment", ["comment" => $comment]);
        echo json_encode($json);
    }
}