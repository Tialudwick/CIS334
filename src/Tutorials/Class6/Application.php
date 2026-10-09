<?php
declare(strict_types=1);
namespace App\Tutorials\Class6;
class Application
{
 public function run(): void
 {
 $defaultController = new DefaultController();
 $productController = new ProductController();
 $action = $_GET['action'] ?? 'home';
 if (!is_string($action)) {
 $action = 'home';
 }
 switch ($action) {
 case 'products':
 $productController->productList();
 break;
 case 'contact':
 $defaultController->contact();
 break;
 case 'home':
 default:
 $defaultController->home();
 }
 }
}
