<?php 
declare(strict_types=1);

namespace App\Exercises\Class6;

use TWIG\Environment;
use Twig\Loader\FilesystemLoader;

abstract class Controller
{
    public const TEMPLATE_PATH = __DIR__ . '/../../../template/exercises/class6';

    protected Environment $twig;

    public function __construct()
    {
        $loader = new FilesystemLoader(self::TEMPLATE_PATH);
        $this->twig = new Environment($loader, [
            'autoscape' => 'html',
            'strict_variables' => true,
        ]);
    }
}