<?php

use Slim\App;
use Moesif\Middleware\MoesifSlim;

return function (App $app, Array $moesifOptions) {
    
    $app->addErrorMiddleware(true, true, true);

    // Add Moesif Middleware
    $middleware = new MoesifSlim($moesifOptions);
    $app->add($middleware);
};
