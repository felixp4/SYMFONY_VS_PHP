<!-- templates/list.php -->

<?php $title='List of posts' ?>

<?php ob_start() ?>
<h1>List of posts</h1>
    <ul>
        <?php foreach($posts as $post): ?>
            <li>
                <a href="/show.php?id=<?= $post['id'] ?>">
                    <?= $post['name'] ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>
