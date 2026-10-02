<?php

declare(strict_types= 1);

use App\Discovery\Application;

require_once __DIR__ . '/../../vendor/autoload.php';

$app = new Application();
$app->run();