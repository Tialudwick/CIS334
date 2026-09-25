<?php
declare(strict_types=1);

use App\Tutorials\Class4\Admin\User as AdminUser;
use App\Tutorials\Class4\User;

$loader = function (string $class): void {
 $prefix = 'App\\';
 if (!str_starts_with($class, $prefix)) {
 return;
 }

 $relativeClass = substr($class, strlen($prefix));

 $file = __DIR__ . '/../../src/'
 . str_replace('\\', '/', $relativeClass) . '.php';

 if (is_file($file)) {
 require_once $file;
 }
};

spl_autoload_register($loader);

echo (new User('Avery'))->getName(), '<br>', PHP_EOL;

echo (new AdminUser('Morgan'))->getName(), '<br>', PHP_EOL;
