<?php
// model.php
function open_database_connection()
{
    $link = new PDO ("mysql:host=localhost; dbname=CRUD", 'root', 'phpschool17');
    return $link;
}

function close_database_connection(&$link)
{
    $link = Null;
}

function get_all_posts()
{
    $link = open_database_connection();

    $result = $link->query("SELECT id, name FROM article");

    $posts = array();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $posts[] = $row;
    }
    close_database_connection($link);
    return $posts;
}