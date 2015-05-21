 <?php
 if(isset($articleid)){
		require('apps/article-single.php');
	}
	else {
		require('views/article.phtml');
	}
?>

