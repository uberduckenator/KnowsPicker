<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<head>
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
<<<<<<< HEAD
				echo('<a href="/Orders">My orders</a>');
=======
				echo('<a href="/Purchase/orders">My orders</a>');
>>>>>>> 8ac1a8ca910f132f053dd1e3e33d538143a8f238
				echo('<a href="/PCBuilds/myBuilds>My PC Builds</a>"');	
				echo('<a href="/Cart"><img src="" alt="Cart"></a>');
				echo('<a href="/Profile"><img src="" alt="Profile"></a>');
				echo('<a href="/PCBuild/myBuilds">My Builds</a>');
			}	
			echo('<a href="/Login/logout">Logout</a>');
		}
	?>
</div>
<div class ="navigation">
	<ul>
		<li><a href="/Home">Home</a></li>
<<<<<<< HEAD
		<li><a href="/Items/CPU">Somewhere</a></li>
		<li><a href="/Items/GPU">GPUs</a></li>
		<li><a href="/Items/Motherboard">Motherboards</a></li>
		<li><a href="/Items/Case">Cases</a></li>
=======
		<li><a href="/Items/CPU">CPUs</a></li>
		<li><a href="/Items/GPU">GPUs</a></li>
		<li><a href="/Items/Motherboard">Motherboards</a></li>
		<li><a href="/Items/PCCase">Cases</a></li>
>>>>>>> 8ac1a8ca910f132f053dd1e3e33d538143a8f238
		<li><a href="/Items/PSU">Power Supplies</a></li>
		<li><a href="/Items/RAM">RAM</a></li>
		<li><a href="/Items/Storage">Storage</a></li>
		<li><a href="/PCBuild">PCBuilds</a></li>
	</ul>
</div>
</html>
