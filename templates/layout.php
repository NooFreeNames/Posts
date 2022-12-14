<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/post_style.css" rel="stylesheet">
    <link href="css/post_add_style.css" rel="stylesheet">
    <link href="css/registration_style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title><?=$title?></title>
</head>
<body>
<header id="pageHeader">
<nav class="header-container main-container">
        <a href="">
            <img class="logo" src="img/logo.svg" width="40" height="40" alt="Лого сайта"/>
        </a>
        <form class="search-form" action="index.php" method="get" name="search-panel">
            <input class="search-text-field" placeholder="Поиск" autocomplete="off" type="search" name="s" value="<?php echo htmlentities($searchString);?>">
            <!--            <input class="send-button" type="submit">-->
        </form>
    </nav>
</header>z
<main id="pageMain">
    <div class="main-container">
        <?=$main?>
    </div>
</main>
</body>
</html>