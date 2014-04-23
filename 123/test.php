<?php
require_once '../conn.php';
require_once '../http.php';
function outputStory($article, $only_snippet=FALSE) {
global $conn;
$article=2;
if ($article) {
$sql = "SELECT ar.*, usr.name " .
"FROM cms_articles ar " .
"LEFT OUTER JOIN cms_users usr " .
"ON ar.author_id = usr.user_id " .
"WHERE ar.article_id = " . $article;
$result = mysql_query($sql,$conn);
if ($row = mysql_fetch_array($result)) {
echo "<h3>" . htmlspecialchars($row['title']) . "</h3>\n";
        echo "<h5><div class=\"byline\">By: " .
htmlspecialchars($row['name']) .
"</div>";
echo "<div class=\"pubdate\">";
if ($row['is_published'] == 1) {
echo date("F j, Y",strtotime($row['date_published']));
} else {
echo "not yet published";
}
echo "</div></h5>\n";
if ($only_snippet) {
echo "<p>\n";
echo nl2br(htmlspecialchars(trimBody($row['body'])));
echo "</p>\n";
echo "<h4><a href=\"viewarticle.php?article=" .
$row['article_id'] . "\">Full Story...</a></h4><br>\n";
} else {
echo "<p>\n";
echo nl2br(htmlspecialchars($row['body']));
echo "</p>\n";
}
}
}
}
?>