<?php
declare(strict_types=1);
namespace App\Tutorials\Class6;
class DefaultController extends Controller
{
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
