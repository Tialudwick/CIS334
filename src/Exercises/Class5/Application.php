<?php

declare(strict_types= 1);

namespace App\Exercises\Class5;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Application
{
    private const PATH_TO_TEMPLATES = __DIR__ . '/../../../template/exercises/class5'; 

    private Environment $twig;
    private string $name;

    public function __construct()
    {
        if (isset($_SESSION['name']) && is_string($_SESSION['name']) && trim($_SESSION['name']) !== '') {
            $this->name = trim($_SESSION['name']);
        } else {
            $this->name = 'Visitor';
        }

        $loader = new FilesystemLoader(self::PATH_TO_TEMPLATES);
        $this->twig = new Environment($loader, [
            'autoscape' => 'html',
            'strict_variables' => true,
        ]);

        $this->twig->addGlobal('name', $this->name);
}

public function run(): void
{
    $action = $_GET['action'] ?? 'home'; 

    if (!is_string($action)) {
        $action = 'home';
    }

    switch ($action) {
        case 'staff':
            $this->staff();
            break;
        case 'name':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $this->name();
            } else {
                $this->home();
            }
            break;
        case 'home':
        default:
            $this->home();
            break;
    }
}

public function home(): void 
{}