<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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
			$country_id = $country->country_id;
			echo "<option value='$country_id'>$country_name</option>";
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
	<input type="submit" name="action" value="Create" />
	</div>
</form>


</div>
</body>
</html>