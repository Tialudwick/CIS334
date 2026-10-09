<?php
declare(strict_types=1);
namespace App\Tutorials\Class6;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
abstract class Controller
{
 private const PATH_TO_TEMPLATES = __DIR__ .
'/../../../templates/tutorials/class6';
 protected Environment $twig;
 public function __construct()
 {
 $loader = new FilesystemLoader(self::PATH_TO_TEMPLATES);
 $this->twig = new Environment($loader, [
 'autoescape' => 'html',
 'strict_variables' => true,
 ]);
 }
}
