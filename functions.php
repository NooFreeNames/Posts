<?php
/**
 * @param PDO $conn
 * @param string $search_string
 * @return PDOStatement
 */
function find_posts(PDO $conn, string $search_string) : PDOStatement
{
    $search_string = trim($search_string);
    $sql = "SELECT post.Id AS Id, Title, Text, PublicationDataTime, Path FROM post 
        LEFT OUTER JOIN post_has_image ON post_has_image.Post = post.Id 
        LEFT OUTER JOIN image ON post_has_image.Image = image.Id ";
    $order_by = "ORDER BY ";
    if (empty($search_string)) {
        return $conn->query($sql . $order_by . 'PublicationDataTime DESC');
    }

    $concat = 'CONCAT(Title, " ", Text)';

    $words = preg_split('/[\s,_\-.]+/', $search_string);
    $words_len = count($words);

    $order_by_next = '';
    if ($words_len > 1) {
        $order_by .= "REGEXP_INSTR($concat, :search_regexp) = 0, ";
        $order_by_next .= 'LOCATE(:search_string, Title) = 0, ';
    }
    $sql .= "WHERE 0 ";
    for ($i = 0; $i < $words_len; $i++) {
        $sql .= "or LOCATE(:word$i, $concat) != 0 ";
        $order_by .= "REGEXP_INSTR($concat, :word_regexp$i) = 0, ";
        $order_by_next .= "LOCATE(:word$i, Title) = 0,";
    }


    $stmt = $conn->prepare($sql . $order_by . $order_by_next . 'PublicationDataTime DESC');

    if ($words_len > 1) {
        $stmt->bindValue(":search_string", $search_string);
        $stmt->bindValue(":search_regexp", "(^|[^а-яА-я\w])$search_string($|[^а-яА-я\w])");
    }
    for ($i = 0; $i < $words_len; $i++) {
        $stmt->bindValue(":word$i", $words[$i]);
        $stmt->bindValue(":word_regexp$i", "(^|[^а-яА-я\w])$words[$i]($|[^а-яА-я\w])");
    }
    $stmt->execute();
    return $stmt;

}

/**
 * @param PDO $conn
 * @param int $id
 * @return array|false
 */
function get_post(PDO $conn, int $id): array|null  {
    $sql = "SELECT post.Id AS Id, Title, Text, PublicationDataTime, Path FROM post 
        LEFT OUTER JOIN post_has_image ON post_has_image.Post = post.Id 
        LEFT OUTER JOIN image ON post_has_image.Image = image.Id
        WHERE post.Id = $id";

    $result = $conn->query($sql)->fetch();
    return $result === false ? null : $result;
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