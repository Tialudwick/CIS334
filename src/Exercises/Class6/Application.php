<?php 

declare(strict_types=1);

namespace App\Exercises\Class6;

class Application
{

public function run(): void
{
    $action = $_GET['action'] ?? 'home'; 

    if (!is_string($action)) {
        $action = 'home';
    }

    $defaultController = new DefaultController();
    $vcfController = new VCFController();
    $feedController = new FeedController();

    switch ($action) {
        case 'about':
            echo $defaultController->about();
            break;
        
        case 'hobby':
                echo $defaultController->hobby();
                break;
        case 'vcf':
            $vcfController->download();
            break;
        case 'feed':
            echo $feedController->index();
            break;
        case 'feed_text':
            echo $feedController->textOnly();
            break;
        case 'feed_image':
            echo $feedController->imageOnly();
            break;
        case 'home':
            echo $defaultController->home();
            break;
        }
    }
}