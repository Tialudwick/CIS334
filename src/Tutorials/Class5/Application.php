<?php
declare(strict_types=1);
namespace App\Tutorials\Class5;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
class Application
{
 private const PATH_TO_TEMPLATES = __DIR__ .
'/../../../templates/tutorials/class5';
 private Environment $twig;
 public function __construct()
 {
    $loader = new FilesystemLoader(self::PATH_TO_TEMPLATES);
 $this->twig = new Environment($loader, [
 'autoescape' => 'html',
 'strict_variables' => true,
 ]);
 }
public function run(): void
{
    $products = [
    new Product('Club notebook', 4.50),
    new Product('Club mug', 8.00),
];
$template = 'demo.html.twig';
$args = [
 'name' => 'Avery',
 'meeting' => ['day' => 'Wednesday', 'room' => 'Library 204'],
 'product' => $products[0],
 'products' => $products,
 ];
 echo $this->twig->render($template, $args);
}
}
