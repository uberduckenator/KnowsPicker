<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<head>
	<title>Knowspicker.com:Home</title>
</head>
	<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand">KnowsPicker</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
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
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
	<?php
		if(!isset($_SESSION['login_id']))
		{
			echo('<li class="nav-item"><a href="/Login">Login</a></li>');
		}
		else
		{
			if(isset($_SESSION['role']))
			{
				if($_SESSION['role'] == 'company')
				{
					echo('<li class="nav-item"><a class="nav-link" href="Company/inventory">My inventory</a></li>');
				}
				elseif ($_SESSION['role'] == 'admin')
				{
					echo("<li class='nav-item'><a class='nav-link' href='/Ticket'>My tickets</a></li>");
				}
				else
				{
				echo("<li class='nav-item'><a class='nav-link' href='/Purchase/orders'>My orders</a></li>");
				echo("<li class='nav-item'><a class='nav-link' href='/PCBuild/myBuilds'>My PC Builds</a></li>
					  <li class='nav-item'><a class='nav-link' href='/Favorite'>Favorites</a></li>");
				echo("<li class='nav-item'><a class='nav-link' href='/Purchase'><img alt='Cart'></a></li>");
				echo("<li class='nav-item'><a class='nav-link' href='/Profile'><img src='' alt='Profile'></a></li>");
				}	
			}
			echo("<li class='nav-item'><a class='nav-link' href='/Login/logout'>Logout</a></li>");	
		}
	?>
	</ul>
</nav>
<nav class="navbar navbar-light bg-light">
	<div class='container'>
		<ul class="navbar-nav mr-auto">
			<li class='nav-item'><a class="nav-link" href="/Home">Home</a></li>
			<li class='nav-item'><a class="nav-link"href="/Items/CPU">CPUs</a></li>
			<li class='nav-item'><a class="nav-link"href="/Items/CPU">CPU</a></li>
			<li class='nav-item'><a class="nav-link"href="/Items/CPUCooler">CPU Coolers</a></li>
			<li class='nav-item'><a class="nav-link"href="/Items/GPU">GPUs</a></li>
			<li class='nav-item'><a class="nav-link"href="/Items/Motherboard">Motherboards</a></li>
			<li class='nav-item'><a class="nav-link" href="/Items/PCCase">Cases</a></li>
			<li class='nav-item'><a class="nav-link"href="/Items/PSU">Power Supplies</a></li>
			<li class='nav-item'><a class="nav-link"href="/Items/RAM">RAM</a></li>
			<li class='nav-item'><a class="nav-link"href="/Items/Storage">Storage</a></li>
			<li class='nav-item'><a class="nav-link"href="/PCBuild">PCBuilds</a></li>
		</ul>
</div>
</nav>
<body>
