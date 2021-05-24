<?php

require_once('model.php');

$posts = get_all_posts();

// include the HTML presentation code
require 'templates/list.php';
