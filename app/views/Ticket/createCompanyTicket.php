<html>
	<head>
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
		<script src="/js/bootstrap.js"></script>
		<title>Add a Ticket</title>
	</head>
	<body>
		<div class="container">
			<h1>Add Ticket</h1>
			<form method="post" action="" class="form-horizontal">
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" class="form-control" name="title" id="title" />
				</div>
				<div class="form-group">
					<label for="description">Description</label>
					<textarea class="form-control" name="description" id="description"></textarea>
				</div>
				<div class="form-group">
					<input type="submit" name="action" value="Add" />
				</div>
			</form>
		</div>
	</body>
</html>