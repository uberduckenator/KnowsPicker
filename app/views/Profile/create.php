<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
	<script src="/js/jquery-3.2.1.min.js"></script>
	<script src="/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
<h1>Create</h1>

<form method="post" action="" class="form-horizontal">
	<div class="form-group">
	<label for="username">First Name</label>
	<input type="text" class="form-control" name="first_name" id="first_name" />
	</div>
	<div class="form-group">
	<label for="username">Last Name</label>
	<input type="text" class="form-control" name="last_name" id="last_name" />
	</div>
	<div class="form-group">
	<label for="username">Email</label>
	<input type="text" class="form-control" name="email" id="email" />
	</div>
	<div class="form-group">
	<label for="username">Country</label>
	<select name="countries">		
	<?php
		foreach($model as $country){
			$country_name = $country->country_name;
			$abbreviation = $country->country_code;
			echo "<option value='$abbreviation'>$country_name</option>";
		}
	?>
	</select>
	</div>
	<div class="form-group">
	<label for="username">City</label>
	<input type="text" class="form-control" name="city" id="city" />
	</div>
	<div class="form-group">
	<label for="username">Street Address</label>
	<input type="text" class="form-control" name="street_address" id="street_address" />
	</div>
	<div class="form-group">
	<label for="username">Postal Code</label>
	<input type="text" class="form-control" name="postal_code" id="postal_code" />
	</div>
	<div class="form-group">
	<input type="submit" class="btn btn-default" name="action" value="Create" />
	</div>
</form>


</div>
</body>
</html>