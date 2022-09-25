<main class="main-container">
    <!--    <a class="post-button" href="#">-->
    <!--        <img src="img/plus.png" alt="+" width="50px" hight="50px"/>-->
    <!--    </a>-->
    <ul class="post-list">
        <li class="post-container">
            <form class="post-form" action="post_addition.php" method="post" enctype="multipart/form-data">
                <div class="post-creating-part">
                    <input class="post-input-field title-input-field title-font block" type="text" placeholder="Заголовок" name="title" maxlength="45"/>
                    <p>
                        <textarea class="post-input-field content-input-field content-font block" placeholder="Содержимое" name="text"></textarea>
                    </p>
                </div>
                <div class="post-creating-part">

                </div>
                <div class="post-creating-part">
                    <input value="Опубликовать" class="button " type="submit">
                </div>
                <div class="post-creating-part">
                    <input name="image" id="upload-image" type="file" hidden="hidden">
                    <input type="button" class="button upload-image-button" value="Загрузить изображение">
                    <span class="upload-text" id="upload-text">Файл не выбран</span>
                </div>
            </form>
        </li>
        <?php foreach (GetPosts($conn, $searchString) as $row){ ?>
            <li class="post-container">
                <h2 class="title title-font"><?php echo highlight($row["Title"], $searchString) ?></h2>
                <p class="                                               content content-font"><?php echo highlight($row["Text"], $searchString) ?></p>
            </li>
        <?php }?>
    </ul>
    <script src="js/script.js"></script>
</main>