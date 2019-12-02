<?php
	include('header.php');
?>
<h3>Create a PC Build</h3>
<div class = "container">
	<form method="post" action="" class="form-horizontal">
		<div class="form-group">
		<label for="name">PC Build Name</label>
		<input type="text" class="form-control" name="name" id="name"/>
		</div>
		<div class="form-group">
		<label for="description">Description</label>
		<input type="text" class="form-control" name="description" id="description" />
		</div>
		<div class="form-group">
		<input type="submit" class="form-control" name="action" id="submit" value="submit" />
		</div>
	</form>
</div>
<?php
	include('footer.php');
?>