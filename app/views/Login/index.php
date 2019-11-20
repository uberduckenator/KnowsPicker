<html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
	<script src="/js/jquery-3.2.1.min.js"></script>
	<script src="/js/bootstrap.js"></script>
	<title>Login</title>
</head>
<body>
<div class="container">

	<?php if(isset($data['error']))
			echo "<div class='alert alert-danger' role='alert'>$data[error]</div>";
	?>
	<h1>Log in</h1>
	<form action="" method="post" class="form-horizontal">
	<div class="form-group">
		<label for="username">UserName:</label>
		<input type="text" class="form-control" name="username" id="username" />
	</div>
	<div class="form-group">
		<label for="password">Password:</label>
		<input type="password" class="form-control" name="password" id="password" />
	</div>
	<div class="form-group">
		<input type="submit" name="action" value="Login" />
	</div>
	</form>
</div>
</body></html>