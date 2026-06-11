USE blog;

INSERT INTO `posts` (
    `user_id`,
    `title`,
    `post_img`,
    `like_count`,
    `content`,
    `posted_at`
) VALUES (
    1,
    'Зимняя прогулка',
    '/lab_2/src/images/snowy_city_crosswalk.jpg',
    203,
    'Так красиво сегодня на улице! Настоящая зима)) Вспоминается Бродский: «Поздно ночью, в уснувшей долине, на самом дне, в городке, занесенном снегом по ручку двери...»',
    DATE_SUB(NOW(), INTERVAL 2 HOUR)
),
(
    2,
    'Мой идеальный вечер',
    '/lab_2/src/images/book_fish_on_table.jpg',
    534,
    'Мой идеальный вечер: хорошая книга, чашечка чая и уютная атмосфера. А что вас вдохновляет? 📚✨',
    DATE_SUB(NOW(), INTERVAL 1 DAY)
);