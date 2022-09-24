<?php
require_once('db.php');
require_once('functions.php');
require_once('data.php');

$main = include_template('main.php', [
    'searchString' => $searchString,
    'conn' => $conn,
]);
$layout = include_template('layout.php', [
    'searchString' => $searchString,
    'main' => $main ,
    'title' => $title,
]);

echo $layout;


