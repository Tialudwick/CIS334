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
 case 'product':
 $rawId = $_GET['id'] ?? null;
 $id = is_string($rawId)
 ? filter_var($rawId, FILTER_VALIDATE_INT, ['options' =>
['min_range' => 1]])
 : false;
 if ($id === false) {
 $productController->productNotFound();
 break;
 }
 $productController->showProduct($id);
 break;
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