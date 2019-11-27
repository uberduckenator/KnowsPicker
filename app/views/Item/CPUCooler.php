<html>
<head>
	<title>Add CPU Cooler</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
	<script src="/js/jquery-3.2.1.min.js"></script>
	<script src="/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
<h1>Add CPU Cooler</h1>

<form method="post" action="" class="form-horizontal">
	<div class="form-group">
	<label for="username">Model</label>
	<input type="text" class="form-control" name="model" id="model" />
	</div>
	<div class="form-group">
	<label for="username">Sockets</label>
	<input type="text" class="form-control" name="sockets" id="sockets" />
	</div>
	<div class="form-group">
	<label for="username">Fan RPM</label>
	<input type="text" class="form-control" name="fan_rpm" id="fan_rpm" />
	</div>
	<div class="form-group">
	<label for="username">Height</label>
	<input type="text" class="form-control" name="heigh" id="height" />
	</div>
	<div class="form-group">
	<input type="submit" class="btn btn-default" name="action" value="Add" />
	</div>
</form>


</div>
</body>
</html>