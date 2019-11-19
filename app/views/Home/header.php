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
		if(!isset($SESSION['user_id']))
			echo('<a href="Login">Login</a>');
		else
		{
			if($SESSION['role'] == 'company')
			{
				echo('<a href="Inventory">My inventory</a>');
				echo('<a href=""></a>');
			}
			elseif ($SESSION['role'] == 'admin')
			{
				echo('<a href="Ticket">My tickets</a>');
			}
			else
			{
				echo('<a href="Orders">My orders</a>');	
				echo('<a href="Cart"><img src="" alt="Cart"></a>');
			}	
			echo('<a href="Logout">Logout</a>');
		}
	?>
</div>
<div class ="navigation">
	<ul>
		<li><a href="Home">Home</a></li>
		<li><a href="">Somewhere</a></li>
	</ul>
</div>
