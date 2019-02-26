<?php
session_start();
	require("config.php");
	require('inc/header.php');
	if (!isset($_GET['page'])) :
			require("page/index.php");
		else:
			require("page/".$_GET['page'].".php");
		endif;	
	require('inc/footer.php');
?>