<?php

require_once 'vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
// Route the request internally
// $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = $request->getPathInfo();

if ('/' === $uri) {
    $response = list_action();
} elseif ('/show' === $uri && $request->query->has('id')) {
    $response = show_action($request->query->get('id'));
} else {
    $html = '<html><body><h1>Page Not Found</h1></body></html>';
    $response = new Response($html, Response::HTTP_NOT_FOUND);
}

$response->send();