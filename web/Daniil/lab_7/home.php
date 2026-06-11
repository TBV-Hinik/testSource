<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лента | Социальная сеть</title>
    <link rel="stylesheet" href="/lab_7/src/css/home/style.css">
</head>
<body>
    <?php
        require_once __DIR__ . '/api/api.php';

        $connection = connectDatabase();

        if ($connection === null)
        {
            echo '<p>Ошибка подключения к базе данных</p>';
            exit();
        }

        $posts = getAllPostsWithUsers($connection);
    ?>

    <div class="app">
        <nav class="sidebar">
            <a href="home.php" class="sidebar__item">
                <img class="sidebar__icon" src="/lab_7/src/images/home_select.png" alt="home">
            </a>
            <a href="profile.html" class="sidebar__item">
                <img class="sidebar__icon" src="/lab_7/src/images/profile.png" alt="profile">
            </a>
            <a href="#" class="sidebar__item">
                <img class="sidebar__icon" src="/lab_7/src/images/add.png" alt="add">
            </a>
        </nav>

        <main class="feed">
            <?php foreach ($posts as $post): ?>
                <?php
                    $now = new DateTime();
                    $posted = new DateTime($post['posted_at']);
                    $diff = $now->diff($posted);

                    if ($diff->days === 0 && $diff->h === 0)
                    {
                        $timeAgo = $diff->i . ' минут назад';
                    }
                    elseif ($diff->days === 0)
                    {
                        $timeAgo = $diff->h . ' часов назад';
                    }
                    elseif ($diff->days === 1)
                    {
                        $timeAgo = '1 день назад';
                    }
                    else
                    {
                        $timeAgo = $diff->days . ' дней назад';
                    }
                ?>
                <div class="post">
                    <div class="post__header">
                        <div class="post__user-info">
                            <img class="post__avatar" src="<?php echo $post['user_avatar']; ?>" alt="<?php echo $post['username']; ?>">
                            <span class="post__username"><?php echo $post['username']; ?></span>
                        </div>
                    </div>

                    <div class="post__photo">
                        <img class="post__image" src="<?php echo $post['post_img']; ?>" alt="<?php echo $post['title']; ?>">
                    </div>

                    <div class="post__reactions">
                        <button class="like-btn">
                            <img class="like-btn__icon" src="/lab_7/src/images/heart.png" alt="heart">
                            <span class="like-btn__count"><?php echo $post['like_count']; ?></span>
                        </button>
                    </div>

                    <div class="post__caption">
                        <?php echo $post['content']; ?>
                    </div>

                    <div class="post__date">
                        <?php echo $timeAgo; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </main>
    </div>
</body>
</html>