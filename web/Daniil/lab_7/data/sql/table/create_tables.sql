-- Создание базы данных
-- CREATE DATABASE IF NOT EXISTS blog
-- CHARACTER SET utf8mb4
-- COLLATE utf8mb4_unicode_ci;

-- USE blog;

-- Таблица пользователей
CREATE TABLE IF NOT EXISTS `user` (
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
CREATE TABLE IF NOT EXISTS `post` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(200),
    `subtitle` VARCHAR(200),
    `content` MEDIUMTEXT,
    `posted_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB
DEFAULT CHARSET = utf8mb4
COLLATE = utf8mb4_unicode_ci;