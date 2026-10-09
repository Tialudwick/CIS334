<?php

declare(strict_types=1);

namespace App\Discovery;

class Application
{
    public function run(): void
    {
        $action = $_GET['action'] ?? 'feed';

        if (!is_string($action)) {
            $action = 'feed';
        }

        $feedController = new FeedController();

        switch ($action) {
            case 'text':
                echo $feedController->textOnly();
                break;
            case 'image':
                echo $feedController->imageOnly();
                break;
            case 'feed':
            default:
                echo $feedController->index();
                break;
        }
    }
}