USE blog;

-- Таблица пользователей
CREATE TABLE IF NOT EXISTS `users` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(50) NOT NULL,
    `login` VARCHAR(50) NOT NULL,
    `description_user` VARCHAR(500) NOT NULL,
    `password` VARCHAR(50) NOT NULL,
    `profile_img` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB
DEFAULT CHARSET = utf8mb4
COLLATE = utf8mb4_unicode_ci;

-- Таблица постов
CREATE TABLE IF NOT EXISTS `posts` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(200),
    `user_id` INT UNSIGNED NOT NULL,
    `post_img` VARCHAR(255) NOT NULL,
    `like_count` INT DEFAULT 0,
    `content` MEDIUMTEXT,
    `posted_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`user_id`) REFERENCES `users`(`id`)
) ENGINE = InnoDB
DEFAULT CHARSET = utf8mb4
COLLATE = utf8mb4_unicode_ci;