<?php

declare(strict_types=1);

namespace App\Discovery;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Application
{
    private const PATH_TEMPLATES = __DIR__ . '/../../templates/discovery';

    private Environment $twig;

    public function __construct()
    {
        $loader = new FilesystemLoader(self::PATH_TEMPLATES);
        $this->twig = new Environment($loader, [
            'autoscape' => 'html',
            'strict_variables' => true,
        ]);
    }

    public function run(): void
    {
        $posts = $this->getPosts();

        echo $this->twig->render('home.html.twig', [
            'pageTitle' => 'Campus Discovery Feed',
            'posts' => $posts,
        ]);
    }

    /* Return Post
    * @return Post[]
    */
    private function getPosts(): array
    {
        return [
            new Post(
            'Welcome to Campus Discovery!',
            'This feed showcases upcoming campus events, announcements, and photos shared by students and faculty. ',
            'Admin' 
            ),
            
            new ImagePost(
                'New Student Center Opening',
                'Check out the newly renovated student lounge and quiet study spcae!',
                'Campus News',
                'https://via.placeholder.com/600x300?text=New+Student+Center+Opening'
            ),

            new Post(
                'Library Exam Hours Extended',
                'The main campus library will remain open 24 hours during midterms week.',
                'Library Staff '
            ),
            
            new ImagePost(
                'Annual Campus Photography Contest',
                'Submit your best autumn shots by Friday to win a gift card at the bookstore.',
                'Photo Club',
                'https://via.placeholder.com/600x300?text=Campus+Autumn'
                ),
        ];
    }
}