<?php
declare(strict_types= 1);

namespace App\Exercises\Class6;

use App\Discovery\ImagePost;

class FeedController extends Controller
{

    /** @var array<int, Post>  */
    private array $posts;

    public function __construct()
    {
        parent::__construct();

        $this->posts = [
            new Post(
                'Alex',
                'Exploring the new PHP features in version 8.1! Loving the improvements.',
                '2024-06-01 10:15:00'
            ),
            new ImagePost(
                'Sam',
                'Check out this amazing sunset I captured during my vacation!',
                '2024-06-02 18:30:00',
                'https://example.com/images/sunset.jpg'
            ),
            new Post(
                'Jordan',
                'Just finished reading a fantastic book on software architecture. Highly recommend it!',
                '2024-06-03 14:45:00'
            ),
            new ImagePost(
                'Taylor',
                'Here is a photo of my latest art project. Feedback is welcome!',
                '2024-06-04 09:20:00',
                'https://example.com/images/art-project.jpg'
            )
        ];
    }

    public function index(): string
    {
        return $this->twig->render('feed.html.twig', [
            'posts' => $this->posts,
            'currentFilter' => 'all',
        ]);
    }

    public function textOnly(): string
    {
        return $this->twig->render('feed.html.twig', [
            'posts' =>$this->posts, 
            'currentFilter' => 'all',
        ]);

        return $this->twig->render('feed.html.twig', [
            'post' => $filtered, 
            'currentFilter' => 'text',
        ]);
    }  

    public function imageOnly(): string
    {
        $filtered = array_values(array_filter(
        $this->posts,
        fn(Post $post): bool => $post instanceof ImagePost
        ));

        return $this->twig->render('feed.html.twig', [
            'posts' => $filtered, 
            'currentFilter' => 'image',
        ]);
    }
}