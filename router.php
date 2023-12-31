<?php
//set uri to the path currently on
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

//routes mapping to controller
$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
    '/mission' => 'controllers/mission.php'
];



//check if current uri path matches a key in routes, then require controller
function routeToController($uri,$routes){
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    
    } else {
    
        abort();
    }
}

function abort($statusCode = 404)
{
    http_response_code($statusCode);
    require "views/{$statusCode}.php";
    die();
}

routeToController($uri, $routes);