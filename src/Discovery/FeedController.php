<?php

declare(strict_types=1);

namespace App\Discovery;

class FeedController extends Controller
{
    /** @var array<int, Post> */
    private array $posts;

    public function __construct()
    {
        parent::__construct();

        $this->posts = [
            new Post(
                'Welcome to Campus Discovery!',
                'This feed showcases upcoming campus events, announcements, and photos shared by students and faculty.',
                'Admin'
            ),
            new ImagePost(
                'New Student Center Opening',
                'Check out the newly renovated student lounge and quiet study space!',
                'Campus News',
                'https://via.placeholder.com/600x300?text=New+Student+Center+Opening'
            ),
            new Post(
                'Library Exam Hours Extended',
                'The main campus library will remain open 24 hours during midterms week.',
                'Library Staff'
            ),
            new ImagePost(
                'Annual Campus Photography Contest',
                'Submit your best autumn shots by Friday to win a gift card at the bookstore.',
                'Photo Club',
                'https://via.placeholder.com/600x300?text=Campus+Autumn'
            ),
        ];
    }

    public function index(): string
    {
        return $this->twig->render('home.html.twig', [
            'pageTitle' => 'Campus Discovery Feed',
            'posts' => $this->posts,
            'currentFilter' => 'all',
        ]);
    }

    public function textOnly(): string
    {
        $filtered = array_values(array_filter(
            $this->posts,
            fn(Post $post): bool => !($post instanceof ImagePost)
        ));

        return $this->twig->render('home.html.twig', [
            'pageTitle' => 'Campus Discovery Feed - Text Posts',
            'posts' => $filtered,
            'currentFilter' => 'text',
        ]);
    }

    public function imageOnly(): string
    {
        $filtered = array_values(array_filter(
            $this->posts,
            fn(Post $post): bool => $post instanceof ImagePost
        ));

        return $this->twig->render('home.html.twig', [
            'pageTitle' => 'Campus Discovery Feed - Image Posts',
            'posts' => $filtered,
            'currentFilter' => 'image',
        ]);
    }
}