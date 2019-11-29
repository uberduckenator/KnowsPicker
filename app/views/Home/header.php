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
		if(!isset($_SESSION['login_id']))
		{
			echo('<a href="Login">Login</a>');
		}
		else
		{
			if($_SESSION['role'] == 'company')
			{
				echo('<a href="Company/inventory">My inventory</a>');
			}
			elseif ($_SESSION['role'] == 'admin')
			{
				echo('<a href="/Ticket">My tickets</a>');
			}
			else
			{
				echo('<a href="/Orders">My orders</a>');
				echo('<a href="/PCBuilds>My PC Builds</a>"');	
				echo('<a href="/Cart"><img src="" alt="Cart"></a>');
				echo('<a href="/Profile"><img src="" alt="Profile"></a>');
			}	
			echo('<a href="/Login/logout">Logout</a>');
		}
	?>
</div>
<div class ="navigation">
	<ul>
		<li><a href="/Home">Home</a></li>
		<li><a href="/Home/cpu">Somewhere</a></li>
		<li><a href="/Home/gpu">GPUs</a></li>
		<li><a href="/Home/motherboard">Motherboards</a></li>
		<li><a href="/Home/case">Cases</a></li>
		<li><a href="/Home/psu">Power Supplies</a></li>
		<li><a href="/Home/ram">RAM</a></li>
		<li><a href="/Home/storage">Storage</a></li>
	</ul>
</div>
