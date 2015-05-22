 <?php
 if(isset($id_article)){
		require('apps/article-single.php');
	}
	else {
		require('views/article.phtml');
	}
?>

