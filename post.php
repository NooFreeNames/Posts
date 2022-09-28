<?php
if (isset($_GET['id'])) {
    require_once 'db.php';
    require_once 'functions.php';
    $post = get_post($conn, $_GET['id']);

    if (isset($post)) {
        require_once 'data.php';

        $post_page = include_template('post-template.php', [
            'post' => $post,
            'searchString' => '',
            'is_post_preview' => false,
        ]);

        $layout = include_template('layout.php', [
            'searchString' => $searchString,
            'main' => $post_page ,
            'title' => $title,
        ]);

        echo $layout;
    }
    else
    {
        header('HTTP/1.1 404 Not Found');
    }
}
else
{
    header('HTTP/1.1 404 Not Found');
}

