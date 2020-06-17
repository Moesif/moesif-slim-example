<?php

use Slim\Factory\AppFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$moesifOptions = require __DIR__ . '/../config/moesif.php';

// Create App instance
$app = AppFactory::create();

// Register routes
(require __DIR__ . '/routes.php')($app);

// Register middleware
(require __DIR__ . '/middleware.php')($app, $moesifOptions);

return $app;
