 <?php
if($_SESSION){
	require('views/tchat.phtml');
}
else {
	require('views/tchat-logout.phtml');
}
	
?>