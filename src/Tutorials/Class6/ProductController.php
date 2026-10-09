<?php
declare(strict_types=1);
namespace App\Tutorials\Class6;
class ProductController extends Controller
{
    /** @var array<int, Product> */
    private array $products;
    public function __construct()
    {
        parent::__construct();
        $this->products = [
            1 => new Product('Study notebook', 4.50),
            2 => new Product('Desk organizer', 12.00),
            3 => new Product('Pencil set', 3.25),
        ];
    }
    public function productList(): void
    {
        $template = 'products.html.twig';
        $args = ['products' => $this->products];
        echo $this->twig->render($template, $args);
    }
    public function showProduct(int $id): void
    {
        $product = $this->products[$id] ?? null;
        if ($product === null) {
            $this->productNotFound();
            return;
        }
        $template = 'product.html.twig';
        $args = ['product' => $product];
        echo $this->twig->render($template, $args);
        }
        public function productNotFound(): void
        {
        http_response_code(404);
        echo $this->twig->render('product-not-found.html.twig', []);
        }
}
