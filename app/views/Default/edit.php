<html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
	<script src="/js/bootstrap.js"></script>
	<title>Login</title>
</head>
<body>
<div class="container">
	<h1>Default view</h1>
	<form method='post'>
		<label>First name:<input type='text' name='first_name' value='<?php echo $model->first_name; ?>' /></label><br>
		<label>Last name:<input type='text' name='last_name' value='<?php echo $model->last_name; ?>' /></label><br>
		<input type='submit' name='action' value='Save changes' />
	</form>
</div>
</body>
</html>