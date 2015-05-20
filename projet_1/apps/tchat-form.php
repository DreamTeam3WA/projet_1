<?php


header('Content-Type: text/html; charset=utf-8');


fputcsv ($fd, $_POST, ";");

fclose($fd);

// require('validation.php');

?>