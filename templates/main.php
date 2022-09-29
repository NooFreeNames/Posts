<!--    <a class="post-button" href="#">-->
<!--        <img src="img/plus.png" alt="+" width="50px" hight="50px"/>-->
<!--    </a>-->
<ul class="post-list">
    <li class="post-list-item">
        <form class="page-block post-form" action="post_addition.php" method="post" enctype="multipart/form-data">
            <input id="post-title-preview" class="post-input-field title-input-field title-font block" type="text" placeholder="Заголовок" name="title" maxlength="45"/>
            <textarea id="post-text-preview" class="post-input-field content-input-field content-font block" placeholder="Содержимое" name="text"></textarea>
            <img id="post-image-preview" src="img/apex-predators.jpg" alt="Изображение поста">
            <div id="add-bar">
                <input name="image" id="upload-image" type="file" accept="image/png, image/gif, image/jpeg" hidden="hidden">
                <input id="add-bar" type="button" class="button upload-image-button" value="Загрузить изображение">
                <span id="add-bar" class="upload-text" id="upload-text">Файл не выбран</span>
            </div>
            <input id="post-submit" value="Опубликовать" class="button " type="submit">
        </form>
    </li>
    <?php foreach (get_posts($conn, $searchString) as $post) { ?>
        <li class="post-list-item">
            <?= include_template('post-template.php', [
                    'post' => $post,
                    'searchString' => $searchString,
                    'is_post_preview' => true,
            ]);
            ?>
        </li>
    <?php } ?>
</ul>
<script src="js/script.js"></script>
