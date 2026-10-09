<?php
declare(strict_types=1);
namespace App\Tutorials\Class6;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
class DefaultController
{
 private const PATH_TO_TEMPLATES = __DIR__ .
'/../../../templates/tutorials/class6';
 private Environment $twig;
 public function __construct()
 {
 $loader = new FilesystemLoader(self::PATH_TO_TEMPLATES);
 $this->twig = new Environment($loader, [
 'autoescape' => 'html',
 'strict_variables' => true,
 ]);
 }
 public function home(): void
 {
 $template = 'home.html.twig';
 $args = [];
 echo $this->twig->render($template, $args);
 }
 public function contact(): void
 {
 $template = 'contact.html.twig';
 $args = [];
 echo $this->twig->render($template, $args);
 }
}