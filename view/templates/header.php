<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Author Plaza</title>	
	<link rel="stylesheet" href="<?= URL ?>css/style.css">
	<?php
		header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
		header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
		header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
		header("Cache-Control: post-check=0, pre-check=0", false);
		header("Pragma: no-cache");
	?>
</head>
  <body>
	<nav>
	  <ul>
		<li><a href="<?= URL ?>author/index">Authors</a></li>
		<li><a href="<?= URL ?>book/index">Books</a></li>
	  </ul>
	</nav>
  </body>
</html>
