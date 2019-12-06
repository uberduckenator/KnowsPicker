<html>
<head>
	<title>Add Storage</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<h1>Add Storage</h1>

<form method="post" action="" class="form-horizontal">
	<div class="form-group">
	<label for="username">Part Number</label>
	<input type="text" class="form-control" name="part_no" id="part_no" />
	</div>
	<div class="form-group">
	<label for="username">Capacity</label>
	<input type="text" class="form-control" name="capacity" id="capacity" />
	</div>
	<div class="form-group">
	<label for="username">Type</label>
	<input type="text" class="form-control" name="type" id="type" />
	</div>
	<div class="form-group">
	<label for="username">Cache</label>
	<input type="text" class="form-control" name="cache" id="cache" />
	</div>
	<div class="form-group">
	<label for="username">Form Factor</label>
	<input type="text" class="form-control" name="form_factor" id="form_factor" />
	</div>
	<div class="form-group">
	<label for="username">Interface</label>
	<input type="text" class="form-control" name="interface" id="interface" />
	</div>
	<div class="form-group">
	<label for="username">NVMe</label>
	<input type="text" class="form-control" name="nvme" id="nvme" />
	</div>
	<div class="form-group">
	<input type="submit" name="action" value="Add" />
	</div>
</form>


</div>
</body>
</html>