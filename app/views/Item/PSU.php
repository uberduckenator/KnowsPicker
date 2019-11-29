<html>
<head>
	<title>Add PSU</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
	<script src="/js/jquery-3.2.1.min.js"></script>
	<script src="/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
<h1>Add PSU</h1>

<form method="post" action="" class="form-horizontal">
	<div class="form-group">
	<label for="username">Model</label>
	<input type="text" class="form-control" name="model" id="model" />
	</div>
	<div class="form-group">
	<label for="username">Form Factor</label>
	<input type="text" class="form-control" name="form_factor" id="form_factor" />
	</div>
	<div class="form-group">
	<label for="username">Efficiency Rating</label>
	<input type="text" class="form-control" name="efficiency_rating" id="efficiency_rating" />
	</div>
	<div class="form-group">
	<label for="username">Wattage</label>
	<input type="text" class="form-control" name="wattage" id="wattage" />
	</div>
	<div class="form-group">
	<label for="username">Modular</label>
	<input type="text" class="form-control" name="modular" id="modular" />
	</div>
	<div class="form-group">
	<label for="username">Fanless</label>
	<input type="text" class="form-control" name="fanless" id="fanless" />
	</div>
	<div class="form-group">
	<input type="submit" class="btn btn-default" name="action" value="Add" />
	</div>
</form>


</div>
</body>
</html>