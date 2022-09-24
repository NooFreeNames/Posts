<main class="main-container">
    <!--    <a class="post-button" href="#">-->
    <!--        <img src="img/plus.png" alt="+" width="50px" hight="50px"/>-->
    <!--    </a>-->
    <ul class="post-list">
        <li class="post-container">
            <form action="post_addition.php" method="post">
                <input class="post-input-field title-input-field title-font block" type="text" placeholder="Заголовок" name="title" maxlength="45"/>
                <p>
                    <textarea class="post-input-field content-input-field content-font block" placeholder="Содержимое" name="text"></textarea>
                </p>
                <input value="Опубликовать" class="button block" type="submit">

            </form>
        </li>
        <?php foreach (GetPosts($conn, $searchString) as $row){ ?>
            <li class="post-container">
                <h2 class="title title-font"><?php echo highlight($row["Title"], $searchString) ?></h2>
                <p class="content content-font"><?php echo highlight($row["Text"], $searchString) ?></p>
            </li>
        <?php }?>
    </ul>
</main>