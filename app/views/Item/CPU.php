<html>
<head>
	<title>Add CPU</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<h1>Add CPU</h1>

<form method="post" action="" class="form-horizontal">
	<div class="form-group">
	<label for="username">Model</label>
	<input type="text" class="form-control" name="model" id="model" />
	</div>
	<div class="form-group">
	<label for="username">Socket</label>
	<input type="text" class="form-control" name="socket" id="socket" />
	</div>
	<div class="form-group">
	<label for="username">Cores</label>
	<input type="text" class="form-control" name="cores" id="cores" />
	</div>
	<div class="form-group">
	<label for="username">Clock Speed</label>
	<input type="text" class="form-control" name="clock_speed" id="clock_speed" />
	</div>
	<div class="form-group">
	<label for="username">Wattage</label>
	<input type="text" class="form-control" name="wattage" id="wattage" />
	</div>
	<div class="form-group">
	<label for="username">Series</label>
	<input type="text" class="form-control" name="series" id="series" />
	</div>
	<div class="form-group">
	<label for="username">Integrated Graphics</label>
	<input type="text" class="form-control" name="integrated_graphics" id="integrated_graphics" />
	</div>
	<div class="form-group">
	<label for="username">CPU Cooler</label>
	<input type="text" class="form-control" name="cpu_cooler" id="cpu_cooler" />
	</div>
	<div class="form-group">
	<input type="submit" name="action" value="Add" />
	</div>
</form>


</div>
</body>
</html>