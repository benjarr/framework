<?php

require_once('model.php');

$post = get_post_by_id($_GET['id']);

// include the HTML presentation code
require 'templates/show.php';
