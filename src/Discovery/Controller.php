<?php 

declare(strict_types=1);

namespace App\Discovery;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

abstract class Controller
{
    public const TEMPLATE_PATH = __DIR__ . '/../../templates/discovery';

    protected Environment $twig;

    public function __construct()
    {
        $loader = new FilesystemLoader(self::TEMPLATE_PATH);
        $this->twig = new Environment($loader, [
            'autoescape' => 'html',
            'strict_variables' => true,
        ]);
    }
}