<html>
<head>
	<title>Add PC Case</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<h1>Add PC Case</h1>

<form method="post" action="" class="form-horizontal">
	<div class="form-group">
	<label for="username">Type</label>
	<input type="text" class="form-control" name="type" id="type" />
	</div>
	<div class="form-group">
	<label for="username">Power Supply</label>
	<input type="text" class="form-control" name="power_supply" id="power_supply" />
	</div>
	<div class="form-group">
	<label for="username">Motherboard Form Factor</label>
	<input type="text" class="form-control" name="mb_form_factor" id="mb_form_factor" />
	</div>
	<div class="form-group">
	<label for="username">Max GPU Length</label>
	<input type="text" class="form-control" name="max_gpu_length" id="max_gpu_length" />
	</div>
	<div class="form-group">
	<label for="username">Internal 2.5" Bays</label>
	<input type="text" class="form-control" name="internal_2_5_bays" id="internal_2_5_bays" />
	</div>
	<div class="form-group">
	<label for="username">Internal 3.5" Bays</label>
	<input type="text" class="form-control" name="internal_3_5_bays" id="internal_3_5_bays" />
	</div>
	<div class="form-group">
	<input type="submit" name="action" value="Add" />
	</div>
</form>


</div>
</body>
</html>