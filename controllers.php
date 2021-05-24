<?php

function list_action()
{
    $posts = get_all_posts();
    // include the HTML presentation code
    require 'templates/list.php';
}

function show_action($id)
{
    $post = get_post_by_id($id);
    // include the HTML presentation code
    require 'templates/show.php';
}