<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use App\Modal\Teste;
use App\Config\Helpers;

require __DIR__ . '/vendor/autoload.php';
$autoload = new Helpers;
$autoload->autoload();
$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {
    $teste = new Teste;
    $response->getBody()->write($teste->nome());
    return $response;
});

$app->run();