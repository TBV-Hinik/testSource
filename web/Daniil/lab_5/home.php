<?php

require_once 'src/php/functions.php';

$posts = [
    [
        'title' => 'Зимняя прогулка',
        'subtitle' => 'Красота зимнего города',
        'img_modifier' => '',
        'author' => 'Ваня Денисов',
        'author_img' => '/lab_2/src/images/vanya_denisov.jpg',
        'post_img' => '/lab_2/src/images/snowy_city_crosswalk.jpg',
        'like_count' => 203,
        'content' => 'Так красиво сегодня на улице! Настоящая зима)) Вспоминается Бродский: «Поздно ночью, в уснувшей долине, на самом дне, в городке, занесенном снегом по ручку двери...»',
        'posted_at' => strtotime('-2 hours'),
        'has_edit' => true,
    ],
    [
        'title' => 'Книжный вечер',
        'subtitle' => 'Чтение с пользой',
        'img_modifier' => '',
        'author' => 'Лиза Дёмина',
        'author_img' => '/lab_2/src/images/liza_dyomina.jpg',
        'post_img' => '/lab_2/src/images/book_fish_on_table.jpg',
        'like_count' => 534,
        'content' => 'Сегодня дочитала отличную книгу! Очень рекомендую всем любителям современной прозы.',
        'posted_at' => strtotime('-1 day'),
        'has_edit' => false,
    ]
];

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лента | Социальная сеть</title>
    <link rel="stylesheet" href="/lab_2/src/css/home/style.css">
</head>
<body>
    <div class="app">
        
        <nav class="sidebar">
            <a href="home.php" class="sidebar__item">
                <img class="sidebar__icon" src="/lab_2/src/images/home_select.png" alt="home">
            </a>
            <a href="profile.php" class="sidebar__item">
                <img class="sidebar__icon" src="/lab_2/src/images/profile.png" alt="profile">
            </a>
            <a href="#" class="sidebar__item">
                <img class="sidebar__icon" src="/lab_2/src/images/add.png" alt="add">
            </a>
        </nav>

        <main class="feed">
            <?php foreach ($posts as $post): ?>
                <?php include 'src/php/post_preview.php'; ?>
            <?php endforeach; ?>
        </main>
    </div>
</body>
</html>