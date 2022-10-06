<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/post_style.css" rel="stylesheet">
    <link href="../css/post_add_style.css" rel="stylesheet">
    <link href="../css/registration_style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Вход</title>
</head>
<body>
    <header id="pageHeader">
        <nav class="header-container main-container">
            <a href="">
                <img class="logo" src="../img/logo.svg" width="40" height="40" alt="Лого сайта"/>
            </a>
            <form class="search-form" action="#" method="get" name="search-panel">
                <input class="search-text-field" placeholder="Поиск" autocomplete="off" type="search" name="s" value="">
                <!--            <input class="send-button" type="submit">-->
            </form>
        </nav>
    </header>
     <main>
         <form class="page-block authorisation-form" method="post">
             <input placeholder="Электронная почта" name="email" type="email" maxlength="64">
             <input placeholder="Пароль" name="password" type="password" maxlength="64">
             <input class="button" type="submit">
         </form>
     </main>
</body>
