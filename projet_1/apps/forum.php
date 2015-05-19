<?php
	if(isset($sujetid)){
		require('apps/forum-sujet.php');
	}
	else {
		require('views/forum-base.phtml');
	}
?>