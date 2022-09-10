<?php
$conn = new PDO("mysql:host=localhost;port=3307;dbname=posts_db", "root", "");

$searchString = '';
if(isset($_GET['s'])) {
    $searchString =$_GET['s'];
}

$sql = "SELECT * FROM post WHERE LOCATE(:searchString, Title) > 0 or LOCATE(:searchString, Text) ORDER BY Id DESC";
$stmt = $conn->prepare($sql);
$stmt->bindValue(":searchString", $searchString);
$stmt->execute();

function highlight($text, $selected_text): string
{
    /* Highlights text with color */
    if (empty($text)) {
        return '';
    }

    $selected_text_len = mb_strlen($selected_text);
    $firstIndex = mb_stripos($text, $selected_text);
    if ($selected_text_len <= 0 || $firstIndex === false) {
        return htmlentities($text);
    }

    return htmlentities(mb_substr($text, 0, $firstIndex)) .
        '<span class="found-element">' .
        htmlentities(mb_substr($text, $firstIndex, $selected_text_len)) .
        '</span>' .
        htmlentities(mb_substr($text,$firstIndex + $selected_text_len));
}
?>
<!--Сайт с svg -->
<!--https://worldvectorlogo.com/ru/downloaded/google-chat-1-->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Comments Page</title>
</head>
<body>
<header>
    <nav class="header-container main-container">
        <img class="logo" src="img/logo.svg" width="40" height="40" alt="Лого сайта"/>
        <form class="search-form" action="index.php" method="get" name="search-panel">
            <input class="search-text-field" placeholder="Поиск" type="search" name="s" value="<?php echo htmlentities($searchString);?>">
<!--            <input class="send-button" type="submit">-->
        </form>
    </nav>
</header>
<main class="main-container">
<!--    <a class="post-button" href="#">-->
<!--        <img src="img/plus.png" alt="+" width="50px" hight="50px"/>-->
<!--    </a>-->
    <ul class="post-list">
            <li class="post-container">
                <form action="php/post_addition.php" method="post">
                    <input class="post-input-field title-input-field title-font block" type="text" placeholder="Заголовок" name="title" maxlength="45"/>
                    <p>
                        <textarea class="post-input-field content-input-field content-font block" placeholder="Содержимое" name="content"></textarea>
                    </p>
                    <input value="Опубликовать" class="block" type="submit">
                </form>
            </li>
            <?php foreach ($stmt as $row){ ?>
                <li class="post-container">
                    <h2 class="title title-font"><?php echo highlight($row["Title"], $searchString) ?></h2>
                    <p class="content content-font"><?php echo highlight($row["Text"], $searchString) ?></p>
                </li>
            <?php }?>
        </ul>
</main>

</body>
</html>