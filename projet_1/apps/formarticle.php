<?php

header('Content-Type: text/html; charset=utf-8');
var_dump($_POST);
$fd = fopen("./models/article.csv", "a");
fputcsv($fd, $_POST, ";");
fclose($fd);

?>
