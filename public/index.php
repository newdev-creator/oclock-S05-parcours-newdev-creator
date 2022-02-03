<?php
require __DIR__.'/../vendor/autoload.php';

if (isset($_GET['page'])) {
    $currentPage = $_GET['page'];
} else {
    $currentPage = "/";
}

$altoRouter = new AltoRouter();
$altoRouter->setBasePath($_SERVER['BASE_URI']);

$altoRouter->map(
    'GET',
    '/',
    [
        "method" => "homePage",
        "controller" => "sonic\app\Controllers\CoreController"
    ],
    'home'
);

$matchingRoute = $altoRouter->match();

if ($matchingRoute) {
    $tableauInfo = $matchingRoute['target'];
    $nomMethode = $tableauInfo['method'];
    $parametresRoute = $matchingRoute['params'];
    $nomController = $matchingRoute['target']['controller'];
    $controller = new $nomController();
    $controller->$nomMethode($parametresRoute);
} 
else 
{
    exit('404 not found');
}

