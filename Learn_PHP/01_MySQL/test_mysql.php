<?php
	$link = mysql_connect('localhost', 'root', 'abcde');
	echo "\$link=".$link;
	
	mysql_close($link);
	
?>
