<html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
	<script src="/js/bootstrap.js"></script>
	<title>Knowspicker.com:Home</title>
</head>
<div class="topHeader">
	<img src="" alt="Knowspicker Logo">
	<?php 

		if (!isset($_POST["searchBox"]))
		{
			$_POST["searchBox"] = "empty";
		}
		echo("<form action=/Home/search/$_POST[searchBox]>");

		
	?>
		<input type="text" name="searchBox">
		<input type="submit" name="searchButton" value="Search">
	</form>
	<?php
		if(!isset($SESSION['login_id']))
			echo('<a href="Login">Login</a>');
		else
		{
			if($SESSION['role'] == 'company')
			{
				echo('<a href="/Inventory">My inventory</a>');
				echo('<a href=""></a>');
			}
			elseif ($SESSION['role'] == 'admin')
			{
				echo('<a href="/Ticket">My tickets</a>');
			}
			else
			{
				echo('<a href="/Orders">My orders</a>');
				echo('<a href="/PCBuilds>My PC Builds</a>"');	
				echo('<a href="/Cart"><img src="" alt="Cart"></a>');
			}	
			echo('<a href="/Login/logout">Logout</a>');
		}
	?>
</div>
<div class ="navigation">
	<ul>
		<li><a href="Home">Home</a></li>
		<li><a href="">Somewhere</a></li>
	</ul>
</div>
