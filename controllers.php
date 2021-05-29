<?php

use Symfony\Component\HttpFoundation\Response;

/**
 * Helper function to render templates
 *
 * @param string $path
 * @param array $args
 * @return void
 */
function render_template(string $path, array $args)
{
    extract($args);
    ob_start();
    require $path;
    $html = ob_get_clean();

    return $html;
}

function list_action()
{
    $posts = get_all_posts();
    $html = render_template('templates/list.php', ['posts' => $posts]);

    return new Response($html);
}

function show_action($id)
{
    $post = get_post_by_id($id);
    $html = render_template('templates/show.php', ['post' => $post]);

    return new Response($html);
}