<html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
	<script src="/js/bootstrap.js"></script>
	<title>Knowspicker</title>
</head>
<ul>
	<li><a href="somewhere">Somewhere</a></li>
</ul>
<?php
	if(!isset($SESSION['user_id']))
		echo('<a href="Login">Login</a>');
	else
		echo('<a href="Logout">Logout</a>');
?>