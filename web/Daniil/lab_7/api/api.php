<?php

function connectDatabase(): ?PDO
{
    $host = 'localhost';
    $dbName = 'blog';
    $username = 'root';
    $password = '';

    try
    {
        $dsn = "mysql:host={$host};dbname={$dbName};charset=utf8mb4";
        $connection = new PDO($dsn, $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $connection;
    }
    catch (PDOException $e)
    {
        error_log('Database connection error: ' . $e->getMessage());

        return null;
    }
}

function getAllPostsWithUsers(PDO $connection): array
{
    $query = "
        SELECT 
            p.id,
            p.title,
            p.post_img,
            p.like_count,
            p.content,
            p.posted_at,
            u.username,
            u.profile_img as user_avatar
        FROM posts p
        INNER JOIN users u ON p.user_id = u.id
        ORDER BY p.posted_at DESC
    ";

    $statement = $connection->prepare($query);
    $statement->execute();

    return $statement->fetchAll();
}