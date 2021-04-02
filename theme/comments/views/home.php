<?php $v->layout("_theme"); ?>

<section class="content">
    <div class="box_form">
        <h1>Deixe seu Comentário:</h1>
        <div class="ajax_response" style="display: none"></div>
        <form class="form" action="<?= $router->route('comment.create'); ?>" method="post"
              enctype="multipart/form-data">
            <label for="name">Nome</label><br>
            <input type="text" name="name" id="name"/><br><br>

            <label for="comment">Comentário</label><br>
            <textarea name="comment" id="comment"></textarea><br><br>

            <button class="btn btn-front">Enviar Comentário</button><br><br>
        </form>
    </div>

    <div class="box_comment">

    </div>
</section>
