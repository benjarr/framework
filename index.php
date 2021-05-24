<?php

$connection = new PDO("mysql:host=localhost;dbname=blogpoo", 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

$result = $connection->query('SELECT id, title FROM articles');

$posts = [];
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $posts[] = $row;
}

$connection = null;

// include the HTML presentation code
require 'templates/list.php';
