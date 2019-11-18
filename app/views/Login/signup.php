<html>
<head>
	<title>This is an example view</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
	<script src="/js/jquery-3.2.1.min.js"></script>
	<script src="/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
<h1>Signup</h1>

<form method="post" action="/Login/signup" class="form-horizontal">
	<div class="form-group">
	<label for="username">Username</label>
	<input type="text" class="form-control" name="username" id="username" />
	</div>
	<div class="form-group">
	<label for="password">Password</label>
	<input type="password" class="form-control" name="password" id="password" />
	</div>
	<div class="form-group">
	<label for="password">Password Confirmation</label>
	<input type="password" class="form-control" name="passwordConfirmation" id="passwordConfirmation" />
	</div>
	<div class="form-group">
	<label for="password">Select account type: </label>
	<select class="form-control" name="role" id="role">
		<option value="student">Student</option>
		<option value="employer">Employer</option>
		<option value="teacher">Teacher</option>
	</select>
	</div>
	<div class="form-group">
	<input type="submit" class="btn btn-default" name="action" value="Register" />
	</div>
</form>


<div>
</body>
</html>