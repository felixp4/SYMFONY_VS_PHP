<!-- templates/list.php -->

<!DOCTYPE html>
<html>
<head>
    <title>List of posts</title>
</head>
<body>
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
</body>
</html>
