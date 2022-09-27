<?php
/**
 * @param PDO $conn
 * @param string $searchString
 * @return PDOStatement
 */
function get_posts(PDO $conn, string $searchString): PDOStatement
{
    $sql = "SELECT Title, Text, Path, PublicationDataTime FROM post 
        LEFT OUTER JOIN post_has_image ON post_has_image.Post = post.Id 
        LEFT OUTER JOIN image ON post_has_image.Image = image.Id
        WHERE LOCATE(:searchString, Title) > 0 or LOCATE(:searchString, Text) 
        ORDER BY PublicationDataTime DESC";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(":searchString", $searchString);
    $stmt->execute();
    return $stmt;
}

/**
 * @param string | null $text
 * @param string $selected_text
 * @return string
 */
function highlight(string|null $text, string $selected_text): string
{
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
        htmlentities(mb_substr($text, $firstIndex + $selected_text_len));
}

/**
 * @param string $name
 * @param array $data
 * @return string
 */
function include_template(string $name, array $data = []): string
{
    $name = 'templates/' . $name;

    if (!is_readable($name)) {
        return '';
    }

    ob_start();
    extract($data);
    require $name;

    return ob_get_clean();
}