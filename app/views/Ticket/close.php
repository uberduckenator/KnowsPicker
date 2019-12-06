<html>
	<head>
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
		<script src="/js/bootstrap.js"></script>
		<title>Close Ticket</title>
	</head>
	<body>
		<div class="container">
			<h1>Close Ticket</h1>
			<form method="post" action="" class="form-horizontal">
				<div class="form-group">
					<label for="title">Title</label>
					<?php
						echo("$model->title");
					?>
				</div>
				<div class="form-group">
					<label for="description">Description</label>
					<?php
						echo("$model->description");
					?>
				</div>
				<div class="form-group">
					<input type="submit" name="action" value="Close" />
				</div>
			</form>
		</div>
	</body>
</html>