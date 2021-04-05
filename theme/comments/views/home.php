<?php $v->layout("_theme"); ?>

<div class="main_form_comment py-5 px-5">
    <div class="container">
        <div class="row">
            <h1 class="text-front">Deixe seu Comentário:</h1>
        </div>

        <div class="row">
            <form class="form" action="<?= $router->route('comment.create'); ?>" method="post"
                  enctype="multipart/form-data">

                <div class="form-group">
                    <h2 class="text-black-50">Nome:</h2>
                    <input name="name" type="text" class="form-control" placeholder="Insira seu nome">
                </div>

                <div class="form-group">
                    <h2 class="text-black-50">Comentário:</h2>
                    <textarea name="comment" rows="5" placeholder="Escreva sua mensagem"
                              class="form-control"></textarea>
                </div>


                <div class="form-group text-left">
                    <button class="btn btn-front">Enviar Contato</button>
                </div>
            </form>
        </div>
    </div>
</div>

<hr/>

<div class="main_comments">
    <div class="container">
        <div class="row">
            <div class="col-12">

            </div>
        </div>
    </div>
</div>