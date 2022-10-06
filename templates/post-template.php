<div id="<?='post' . $post['id'] ?>" class="page-block <?php if(empty($post['image_path'])):?>post-without-image<?php else:?>post-with-image<?php endif; ?> <?php if($is_post_preview):?>post-preview<?php endif;?>">
    <div id="avatar">A</div>
    <div id="username">Username</div>
    <div id="action-menu">...</div>
    <h2 id="post-title"><?= highlight($post["title"], $searchString) ?></h2>
    <?php if(!empty($post["text"])):?>
        <p id="post-text"><?= highlight($post["text"], $searchString) ?></p>
    <?php endif; ?>
    <?php if(!empty($post["image_path"])):?>
        <img id="post-image" src="<?= 'user_files/user_img/' . $post["image_path"]?>" alt="Изображение поста" class="post-image">
    <?php endif; ?>
    <?php if($is_post_preview):?>
        <a href='post.php?id=<?=$post['id']?>' id="post-link" class="link">Открыть пост</a>
    <?php else:?>
        <a href='index.php#<?='post' . $post['id']?>' id='post-link' class='link'>Вернуться на главную</a>
    <?php endif;?>
    <div id="post-date"><?=$post['publication_data_time']?></div>
</div>
<?php if(!$is_post_preview): ?>
    <div class="page-block">
        <h2>Коментарии</h2>
    </div>
<?php endif;?>