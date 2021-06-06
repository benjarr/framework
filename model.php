<?php

function open_database_connection()
{
    $connection = new PDO("mysql:host=localhost;dbname=blogpoo", 'root', 'Lille-00', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    return $connection;
}

function close_database_connection(&$connection)
{
    $connection = null;
}

function get_all_posts()
{
    $connection = open_database_connection();

    $result = $connection->query('SELECT id, title FROM articles');

    $posts = [];
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $posts[] = $row;
    }

    close_database_connection($connection);

    return $posts;
}

function get_post_by_id($id)
{
    $connection = open_database_connection();

    $query = 'SELECT created_at, title, content FROM articles WHERE id = :id';
    $statement = $connection->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    $post = $statement->fetch(PDO::FETCH_ASSOC);

    close_database_connection($connection);

    return $post;
}
