<div class="post">
    <div class="post__header">
        <div class="post__user-info">
            <img class="post__avatar" 
                 src="<?= htmlspecialchars($post['author_img']) ?>" 
                 alt="<?= htmlspecialchars($post['author']) ?>">
            <span class="post__username"><?= htmlspecialchars($post['author']) ?></span>
        </div>
        <?php if ($post['has_edit'] === true): ?>
            <button class="post__edit">
                <img class="post__edit-icon" src="/lab_2/src/images/edit_button.png" alt="edit">
            </button>
        <?php endif; ?>
    </div>

    <div class="post__photo">
        <img class="post__image" 
             src="<?= htmlspecialchars($post['post_img']) ?>" 
             alt="<?= htmlspecialchars($post['title']) ?>">
    </div>

    <div class="post__reactions">
        <button class="like-btn <?= ($post['like_count'] > 500) ? 'like-btn--red' : '' ?>">
            <img class="like-btn__icon" src="/lab_2/src/images/heart.png" alt="heart">
            <span class="like-btn__count"><?= number_format($post['like_count']) ?></span>
        </button>
    </div>

    <?php if (!empty($post['content'])): ?>
        <div class="post__caption">
            <?= nl2br(htmlspecialchars($post['content'])) ?>
        </div>
        <?php if (mb_strlen($post['content']) > 100): ?>
            <button class="post__more">ещё</button>
        <?php endif; ?>
    <?php endif; ?>

    <div class="post__date">
        <?= formatPostedAt($post['posted_at']) ?>
    </div>
</div>