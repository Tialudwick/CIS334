<?php

declare(strict_types=1);

require_once __DIR__ . '/../../../src/Exercises/Class3/MediaItem.php';
require_once __DIR__ . '/../../../src/Exercises/Class3/Book.php';
require_once __DIR__ . '/../../../src/Exercises/Class3/DVD.php';
require_once __DIR__ . '/../../../src/Exercises/Class3/Audiobook.php';

$book = new Book(1, 'The Pragmatic Programmer', 352);
$dvd = new DVD(2, 'The Matrix');
$audiobook = new Audiobook(3, 'The Hobbit', 395);

$book->setID(10);
echo 'Updated Book ID: ' . $book->getID() . PHP_EOL;

$items = [$book, $dvd, $audiobook];

foreach ($items as $item) {
    echo 'div class="card">' . htmlspecialchars($item->describe()) . '</div>' . PHP_EOL;
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Class 3 My Tiny Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <main class="container py-5">
        <header class="mb-4">
            <p class="text-uppercase text-primary fw-semibold mb-1">CIS 334</p>
            <h1 class="display-5 fw-bold">My Tiny Library</h1>
            <p class="lead text-secondary">A Class 3 object-oriented PHP exercise.</p>
        </header>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php
            foreach ($items as $item) {
                ?>
                <div class="col">
                    <div class="card shadow-sm">
                            <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img card-img-top" height="225" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>
                        <div class="card-body">
                            <p class="card-text"><?php echo $item->describe(); ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group"> 
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </main>
</body>

</html>