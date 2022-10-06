<?php
if (!empty($_POST['title']) && ($_FILES['image']['error'] === UPLOAD_ERR_NO_FILE || $_FILES['image']['error'] === UPLOAD_ERR_OK)) {
    require_once ('db.php');

    $sql = "INSERT INTO POST (title, text, user_id) VALUES (:title, :text, 1)";

    $stmt = $conn->prepare($sql);
    $stmt->bindValue(":title", $_POST["title"]);
    $stmt->bindValue(":text", $_POST["text"] ?? '');
    $stmt->execute();
    $post_id = $conn->lastInsertId('id');

    if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $file_type = substr($_FILES["image"]["name"], strrpos($_FILES["image"]["name"], '.'));
        $file_hash = hash_file('sha256', $_FILES['image']['tmp_name']);
        $file_name = $file_hash . $file_type;
        $file_path = 'user_files/user_img/' . $file_name;

        if(file_exists($file_path)) {
            $sql = "SELECT id FROM IMAGE WHERE path = :file_name";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(":file_name", $file_name);
            $stmt->execute();
            $image_id = $stmt->fetch()['id'];
        } else {
            $sql = "INSERT INTO IMAGE (path) VALUES (:file_name)";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(":file_name", $file_name);
            $stmt->execute();
            move_uploaded_file($_FILES['image']['tmp_name'], $file_path);
            $image_id = $conn->lastInsertId('id');
        }

        $sql = "INSERT INTO POST_HAS_IMAGE (post, image) VALUES ('$post_id', '$image_id')";
        $conn->exec($sql);
    }
}
header('Location: index.php');
exit();