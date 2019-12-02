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
			var_dump($_SESSION['login_id']);
		}
		else
		{
			if(isset($_SESSION['role']))
			{
				if($_SESSION['role'] == 'company')
				{
					echo('<a href="Company/inventory">My inventory</a>');
				}
				elseif ($_SESSION['role'] == 'admin')
				{
					echo('<a href="/Ticket">My tickets</a>');
				}	
			}
			else
			{
				echo('<a href="/Orders">My orders</a>');
				echo('<a href="/PCBuilds/myBuilds>My PC Builds</a>"');	
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
		<li><a href="/Items/CPU">Somewhere</a></li>
		<li><a href="/Items/GPU">GPUs</a></li>
		<li><a href="/Items/Motherboard">Motherboards</a></li>
		<li><a href="/Items/Case">Cases</a></li>
		<li><a href="/Items/PSU">Power Supplies</a></li>
		<li><a href="/Items/RAM">RAM</a></li>
		<li><a href="/Items/Storage">Storage</a></li>
		<li><a href="/PCBuild">PCBuilds</a></li>
	</ul>
</div>
