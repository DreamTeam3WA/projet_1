<?php
header('Content-Type: text/html; charset=utf-8');

$fd = fopen('../models/tchat.csv','a');

fputcsv ($fd, $_POST, ";");

fclose($fd);

// require('validation.php');

?>