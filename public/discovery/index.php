<?php

declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Discovery\FacultyMember;
use App\Discovery\ImagePost;
use App\Discovery\Post;
use App\Discovery\StudentMember;

$student = new StudentMember('Alex Chen', 'alex@campus.edu', 'Computer Science');
$faculty = new FacultyMember('Dr. Sarah Jenkins', 'sjenkins@campus.edu', 'Information Technology');

$posts = [
    new Post(
        $student,
        '2026-10-01 09:00',
        'Excited for the upcoming hackathon this weekend! Who else is building a PHP project?'
    ),
    new ImagePost(
        $faculty,
        '2026-10-01 10:30',
        'Welcome to the new semester! Here is a photo from our orientation session.',
        'https://placehold.co/800x400?text=Campus+Orientation',
        'Campus orientation banner with students and faculty'
    ),
    new ImagePost(
        $student,
        '2026-10-01 11:15',
        'Studying at the campus library terrace today.',
        'https://placehold.co/800x400?text=Library+Terrace',
        'View of students studying on the library terrace'
    ),
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Connect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-4" style="max-width: 680px;">
        <h1 class="mb-4 text-center text-primary">Campus Connect</h1>

        <?php foreach ($posts as $post): ?>
            <?= $post->render() ?>
        <?php endforeach; ?>
    </div>
</body>
</html>