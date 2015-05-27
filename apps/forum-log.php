<?php
	if (droits() == 1 || droits() == 2 || droits() == 3)
	{
		require('views/forum-user.phtml');
	}
?>