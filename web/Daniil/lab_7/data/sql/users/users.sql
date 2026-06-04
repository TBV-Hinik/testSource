-- USE blog;

-- Вставка пользователей
INSERT INTO `user` (
    `username`,
    `login`,
    `description_user`,
    `password`,
    `profile_img`
) VALUES (
    'Ваня Денисов',
    'vanya_denisov',
    'Привет! Я системный аналитик в ACME :) Тут моя жизнь только для самых классных!',
    '$2y$10$YourHashedPasswordHere1',
    '/src/images/vanya_denisov.jpg'
),
(
    'Лиза Дёмина',
    'liza_dyomina',
    'Люблю книги, рыб и уютные вечера. Делюсь моментами счастья.',
    '$2y$10$YourHashedPasswordHere2',
    '/src/images/liza_dyomina.jpg'
);