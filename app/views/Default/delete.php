<html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
	<script src="/js/bootstrap.js"></script>
	<title>Login</title>
</head>
<body>
<div class="container">
	<h1>Delete this?</h1>
	<form method='post'>
		<label>First name:</label><?php echo $model->first_name; ?><br>
		<label>Last name:</label><?php echo $model->last_name; ?><br>
		<input type='submit' name='action' value='Delete' /><a href="/Default/index">cancel</a>
	</form>
</div>
</body>
</html>