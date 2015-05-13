<?php
$page = 'article';
if (isset($_GET['page']))
	$page = $_GET['page'];
require('./views/skel.phtml');

?>