<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP e AJAX - <?= $title; ?></title>

    <link rel="stylesheet" href="<?= url("/theme/comments/assets/css/bootstrap_custom.css"); ?>"/>
    <link rel="stylesheet" href="<?= url("/theme/comments/assets/css/app.css"); ?>"/>
</head>
<body>

<div class="ajax_load">
    <div class="ajax_load_box">
        <div class="ajax_load_box_circle"></div>
        <div class="ajax_load_box_title">Aguarde, carregando!</div>
    </div>
</div>

<main class="content">
    <?= $v->section("content"); ?>
</main>

<script src="<?= url("/shared/scripts/jquery-3.6.0.min.js"); ?>"></script>
<script src="<?= url("/shared/scripts/jquery-ui.js"); ?>"></script>
<script src="<?= url("/theme/comments/assets/js/script.js"); ?>"></script>
</body>
</html>