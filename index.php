<?php
// index.php
$link = new PDO ("mysql:host=localhost; dbname=CRUD", 'root', 'phpschool17');

$result = $link->query("SELECT id, name FROM article");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>List of posts</title>
    </head>
    <body>
        <h1>List of posts</h1>
        <ul>
            <?php while($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <li>
                <a href="/show.php?id=<?= $row['id']?>">
                    <?= $row['name'] ?>
                </a>
            </li>
            <?php endwhile?>
        </ul>
    </body>
</html>

<?php
    $link = null;
?>



