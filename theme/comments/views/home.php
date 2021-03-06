<?php $v->layout("_theme"); ?>

<div class="main_form_comment py-5">
    <div class="px-5">
        <div class="container">
            <div class="row">
                <h1 class="text-front">Deixe seu Comentário:</h1>
            </div>

            <div class="row">

                <form class="form" action="<?= $router->route('comments.create'); ?>" method="post"
                      enctype="multipart/form-data">
                    <div class="form_ajax" style="display: none"></div>
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
</div>

<hr/>

<div class="main_comments">

    <?php if (!empty($comments)): ?>
        <?php foreach ($comments as $comment): ?>
            <?php $v->insert("views/comment", ["comment" => $comment]); ?>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
<hr>
