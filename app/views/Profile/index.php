<head>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
	<script src="/js/bootstrap.js"></script>
	<title>Knowspicker.com:Home</title>
</head>
<div class="topHeader">
	<img src="" alt="Knowspicker Logo">
	<input type="text" name="search value">
	<a href="Search"><img src="" alt="Search Button"></a>

	<p>Welcome</p>
	<p>Check out your profile</p>
</div>

<div class = "container">
	<?php 
	echo "<p>$model->first_name</p>";
	echo "<p>$model->last_name</p>";
	?>
</div>

