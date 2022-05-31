<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use App\Modal\Product;
use App\Config\Helpers;

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();
$app->addBodyParsingMiddleware();
$app->get('/', function (Request $request, Response $response, $args) {
    $products = new Product;

    $response->getBody()->write(json_encode($products->stock()));
    return $response
         ->withHeader('Content-type', 'application/json')
         ->withStatus(200);
});

$app->run();