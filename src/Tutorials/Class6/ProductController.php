<?php
declare(strict_types=1);

namespace App\Tutorials\Class6;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class ProductController
{
    private const PATH_TO_TEMPLATES = __DIR__ . '/../../../templates/tutorials/class6';
    private Environment $twig;

    public function __construct()
    {
        $loader = new FilesystemLoader(self::PATH_TO_TEMPLATES);
        $this->twig = new Environment($loader, [
            'autoescape' => 'html',
            'strict_variables' => true,
        ]);
    }

    public function productionList(): void
    {
        $products = [
            new Product('Study notebook', 4.50),
            new Product('Desk organizer', 12.99),
            new Product('Pencil set', 3.25),
        ];

        $template = 'products.html.twig';
        $args = ['products' => $products];
        echo $this->twig->render($template, $args);
    }
}