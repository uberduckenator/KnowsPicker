<html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
	<script src="/js/bootstrap.js"></script>
	<title>Knowspicker.com:Home</title>
</head>
<div class="topHeader">
	<img src="" alt="Knowspicker Logo">
	<input type="text" name="search value">
	<a href="Search"><img src="" alt="Search Button"></a>
	<?php
		if(!isset($_SESSION['login_id']))
		{
			echo('<a href="Login">Login</a>');
			var_dump($_SESSION['login_id']);
		}
		else
		{
			if($_SESSION['role'] == 'company')
			{
				echo('<a href="Company/inventory">My inventory</a>');
				echo('<a href=""></a>');
			}
			elseif ($_SESSION['role'] == 'admin')
			{
				echo('<a href="Ticket">My tickets</a>');
			}
			else
			{
				echo('<a href="Orders">My orders</a>');	
				echo('<a href="Cart"><img src="" alt="Cart"></a>');
				echo('<a href="Profile"><img src="" alt="Profile"></a>');
			}	
			echo('<a href="Login/logout">Logout</a>');
		}
	?>
</div>
<div class ="navigation">
	<ul>
		<li><a href="Home">Home</a></li>
		<li><a href="">Somewhere</a></li>
	</ul>
</div>
