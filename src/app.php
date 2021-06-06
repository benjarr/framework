<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection;

$routes->add('hello', new Route('/hello/{name}',[
    'name'        => 'World',
    '_controller' => function ($request) {
        $response = render_tempate($request);

        return $response;
    }
]));

$routes->add('bye', new Route('/bye'));

return $routes;
