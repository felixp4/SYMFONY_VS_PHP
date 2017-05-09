<?php
// index.php
$link = new PDO ("mysql:host=localhost; dbname=CRUD", 'root', 'phpschool17');

$result = $link->query("SELECT id, name FROM article");

$posts = array();
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $posts[] = $row;
}

$link = null;

// include the HTML presentation code
require 'templates/list.php';
