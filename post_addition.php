<?php
if (!empty($_POST['title'])) {
    $conn = new PDO("mysql:host=localhost;port=3307;dbname=posts_db", "root", "");

    $sql = "INSERT INTO post (Title, Text, PublicationDataTime) VALUES (:title, :text, NOW())";

    $stmt = $conn->prepare($sql);
    $stmt->bindValue(":title", $_POST["title"]);
    $stmt->bindValue(":text", $_POST["text"] ?? '');
    $stmt->execute();
}
header('Location: index.php');
exit();
