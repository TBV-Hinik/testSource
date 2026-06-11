USE blog;

INSERT INTO `users` (
    `username`,
    `login`,
    `description_user`,
    `password`,
    `profile_img`
) VALUES (
    'Ваня Денисов',
    'vanya_denisov',
    'Привет! Я системный аналитик в ACME :) Тут моя жизнь только для самых классных!',
    'password123',
    '/lab_2/src/images/vanya_denisov.jpg'
),
(
    'Лиза Дёмина',
    'liza_dyomina',
    'Люблю книги, рыб и уютные вечера. Делюсь моментами счастья.',
    'password456',
    '/lab_2/src/images/liza_dyomina.jpg'
);