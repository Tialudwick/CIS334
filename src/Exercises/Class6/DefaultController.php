<?php
declare(strict_types= 1);

namespace App\Exercises\Class6;

class DefaultController extends Controller
{ 
    public function home(): string
    {
        return $this->twig->render('home.html.twig');
    }
}