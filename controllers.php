<?php
// controllers.php

function list_action()
{
    $posts = get_all_posts($_GET['id']);
    require 'templates/list.php';
}

function show_action($id)
{
    $post = get_post_by_id($_GET['id']);
    require 'templates/show.php';
}
