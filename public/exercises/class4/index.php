<?php

declare(strict_types=1);

require_once __DIR__ . '/../../../vendor/autoload.php';

use App\Exercises\Class4\Library\Book as LibraryBook;
use App\Exercises\Class4\Shop\Book as ShopBook;
use App\Exercises\Class4\Library\VideoGame as LibraryVideoGame;
use App\Exercises\Class4\Shop\VideoGame as ShopVideoGame;

// Exercise 4-1 & 4-3: Library Book
$libraryBook = new LibraryBook('PHP Practice');$libraryBook->setDueInDays(7);

// Exercise 4-1 & 4-2: Shop Book
$shopBook = new ShopBook('PHP Practice', 29.99);

// Exercise 4-4: Video Games
$libraryGame = new LibraryVideoGame('Zelda: Tears of the Kingdom');
$libraryGame->setDueInDays(14);$shopGame = new ShopVideoGame('Zelda: Tears of the Kingdom', 59.99);

echo $libraryBook, '<br>', PHP_EOL;
echo $shopBook, '<br>', PHP_EOL;
echo $libraryGame, '<br>', PHP_EOL;
echo $shopGame, '<br>', PHP_EOL;

/*
Written Explanation (Exercise 4-1):
1. Why two Book classes can coexist:
   They reside in two distinct namespaces (`App\Exercises\Class4\Library` and 
   `App\Exercises\Class4\Shop`). PHP identifies classes using their Fully 
   Qualified Class Names (FQCN), preventing naming collisions even when short 
   class names match.

2. Why `use` statements alone cannot load their files:
   `use` statements only create namespace aliases within the current file for 
   developer convenience. They do NOT execute `require` or perform disk I/O. 
   File loading is triggered when a class is actually instantiated or referenced 
   at runtime, prompting the registered Composer autoloader to map the FQCN to 
   the exact file path under `src/`.
*/