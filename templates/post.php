<li class="<?php if(empty($post["Path"])):?>post-without-image<?php else:?>post-with-image<?php endif; ?>">
    <div id="avatar">A</div>
    <div id="username">Username</div>
    <div id="action-menu">...</div>
    <h2 id="post-title"><?= highlight($post["Title"], $searchString) ?></h2>
    <?php if(!empty($post["Text"])):?>
        <p id="post-text"><?= highlight($post["Text"], $searchString) ?></p>
    <?php endif; ?>
    <?php if(!empty($post["Path"])):?>
        <img id="post-image" src="<?= 'user_files/user_img/' . $post["Path"]?>" alt="Изображение поста" class="post-image">
    <?php endif; ?>
    <div id="post-link">
        <a href="index.php" id="post-link" class="link">Открыть пост</a>
    </div>
    <div id="post-date">Вчера 18:55</div>
</li>