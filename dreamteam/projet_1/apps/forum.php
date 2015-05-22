<?php
	if(isset($id_sujet)){
		require('apps/forum-sujet.php');
	}
	else {
		require('views/forum-base.phtml');
	}
?>