<?php

use Slim\App;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use Slim\Psr7\Response;

return function (App $app) {
    $app->get('/user/{id}', function (Request $request, Response $response, $args) {
        
        $data = array('name' => 'Bob', 'age' => 40);
        $payload = json_encode($data);
    
        $response->getBody()->write($payload);
        $newResponse = $response
              ->withHeader('Content-Type', 'application/json')
              ->withHeader('Custom-Header', 'XXXMLDFEUROJ')
              ->withStatus(200);
        return $newResponse;
    });

    $app->post('/user/{id}', function (Request $request, Response $response, $args) {
        
        $data = array('name' => 'Bob', 'age' => 40);
        $payload = json_encode($data);
    
        $response->getBody()->write($payload);
        $newResponse = $response
              ->withHeader('Content-Type', 'application/json')
              ->withHeader('Custom-Header', 'XXXMLDFEUROJ')
              ->withStatus(201);
        return $newResponse;
    });
};