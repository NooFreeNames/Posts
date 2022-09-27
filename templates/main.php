<main class="main-container">
    <!--    <a class="post-button" href="#">-->
    <!--        <img src="img/plus.png" alt="+" width="50px" hight="50px"/>-->
    <!--    </a>-->
    <ul class="post-list">
        <li class="post-container">
            <form class="post" action="post_addition.php" method="post" enctype="multipart/form-data">
                <div class="post-part">
                    <input class="post-input-field title-input-field title-font block" type="text" placeholder="Заголовок" name="title" maxlength="45"/>
                    <p>
                        <textarea class="post-input-field content-input-field content-font block" placeholder="Содержимое" name="text"></textarea>
                    </p>
                </div>
                <div class="post-part post-image-container">
                    <img src="img/apex-predators.jpg" alt="Изображение поста" class="post-image">
                </div>
                <div class="post-part">
                    <input value="Опубликовать" class="button " type="submit">
                </div>
                <div class="post-part">
                    <input name="image" id="upload-image" type="file" hidden="hidden">
                    <input type="button" class="button upload-image-button" value="Загрузить изображение">
                    <span class="upload-text" id="upload-text">Файл не выбран</span>
                </div>
            </form>
        </li>
        <?php foreach (get_posts($conn, $searchString) as $row){ ?>
            <li class="<?php if(empty($row["Path"])):?>post-without-image<?php else:?>post-with-image<?php endif; ?>">
                <div id="avatar">A</div>
                <div id="username">Username</div>
                <div id="action-menu">...</div>
                <h2 id="post-title"><?= highlight($row["Title"], $searchString) ?></h2>
                <?php if(!empty($row["Text"])):?>
                    <p id="post-text"><?= highlight($row["Text"], $searchString) ?></p>
                <?php endif; ?>
                <?php if(!empty($row["Path"])):?>
                    <img id="post-image" src="<?= 'user_files/user_img/' . $row["Path"]?>" alt="Изображение поста" class="post-image">
                <?php endif; ?>
                <div id="post-date">Вчера 18:55</div>
            </li>
        <?php }?>
    </ul>
    <script src="js/script.js"></script>
</main>