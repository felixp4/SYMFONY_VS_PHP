<!-- templates/show.php -->

<?php $title = $post['name'] ?>

<?php ob_start() ?>
    <h1> <?= $post['name'] ?></h1>
    <div class="date"> <?= $post['created_at'] ?> </div>
    <div class="body">
        <?= $post['description'] ?>
    </div>

<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>