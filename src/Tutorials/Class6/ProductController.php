<?php
declare(strict_types=1);
namespace App\Tutorials\Class6;
class ProductController extends Controller
{
 public function productList(): void
 {
 $products = [
 new Product('Study notebook', 4.50),
 new Product('Desk organizer', 12.00),
 new Product('Pencil set', 3.25),
 ];
 $template = 'products.html.twig';
 $args = ['products' => $products];
 echo $this->twig->render($template, $args);
 }
}