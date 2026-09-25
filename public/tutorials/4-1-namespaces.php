<?php
declare(strict_types=1);
use App\Tutorials\Class4\Admin\User as AdminUser;
use App\Tutorials\Class4\User;
require_once __DIR__ . '/../../src/Tutorials/Class4/User.php';
require_once __DIR__ . '/../../src/Tutorials/Class4/Admin/User.php';
echo (new User('Avery'))->getName(), '<br>', PHP_EOL;
echo (new AdminUser('Morgan'))->getName(), '<br>', PHP_EOL;
