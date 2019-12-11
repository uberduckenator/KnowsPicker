<html>
<head>
	<title>Edit Profile</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<h1>Edit</h1>
<div class="container">
	<h3>Original</h3>
	<div class="container">
	<?php
		$item = $model['Profile'];
			echo "<a href=/Profile/edit/$item->user_id>Edit</a>
			<p>first name: $item->first_name<br>
				last name: $item->last_name<br>
				email: $item->email<br>
				city: $item->city<br>
				street: $item->street_address<br>
				postal: $item->postal_code<br>
				country: $item->country_name";
	?>
	</div>
</div>
<form method="post" action="" class="form-horizontal">
	<div class="form-group">
	<label for="first_name">First Name</label>
	<input type="text" class="form-control" name="first_name" id="first_name" />
	</div>
	<div class="form-group">
	<label for="last_name">Last Name</label>
	<input type="text" class="form-control" name="last_name" id="last_name" />
	</div>
	<div class="form-group">
	<label for="email">Email</label>
	<input type="text" class="form-control" name="email" id="email" />
	</div>
	<div class="form-group">
	<label for="countries">Country</label>
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
	<label for="city">City</label>
	<input type="text" class="form-control" name="city" id="city" />
	</div>
	<div class="form-group">
	<label for="street_address">Street Address</label>
	<input type="text" class="form-control" name="street_address" id="street_address" />
	</div>
	<div class="form-group">
	<label for="postal_code">Postal Code</label>
	<input type="text" class="form-control" name="postal_code" id="postal_code" />
	</div>
	<div class="form-group">
	<input type="submit" name="action" value="Create" />
	</div>
	<a href='/Profile'>Cancel</a>
</form>
</div>
</body>
</html>