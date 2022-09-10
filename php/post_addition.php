<?php
if (!empty($_POST['title']) && !empty($_POST['content'])) {
    $conn = new PDO("mysql:host=localhost;port=3307;dbname=posts_db", "root", "");

    $sql = "INSERT INTO post (Title, Content) VALUES (:title, :content)";

    $stmt = $conn->prepare($sql);
    $stmt->bindValue(":title", $_POST["title"]);
    $stmt->bindValue(":content", $_POST["content"]);
    $stmt->execute();
}
header('Location: ../index.php');
exit();
