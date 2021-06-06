<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection;

$routes->add('hello', new Route('/hello/{name}', [
    'name'        => 'World',
    '_controller' => function ($request) {
        $response = render_tempate($request);

        return $response;
    }
]));

$routes->add('leap_year', new Route('/is_leap_year/{year}', [
    'year' => null,
    '_controller' => 'App\Controller\LeapYearController::index',
]));

$routes->add('bye', new Route('/bye'));

return $routes;
