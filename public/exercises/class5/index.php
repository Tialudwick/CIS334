<?php
declare(strict_types= 1);

use App\Exercises\Class5\Application;

session_start();

require_once __DIR__ . '/../../../vendor/autoload.php';

$app = new Application();
$app->run();