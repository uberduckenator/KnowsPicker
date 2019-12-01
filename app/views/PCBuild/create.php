<?php
	include('header.php');
?>
<h3>Create a PC Build</h3>
<div>
	<form method="post" action="" class="form-horizontal">
		<div class="form-group">
		<label for="name">PC Build Name</label>
		<input type="text" class="form-control" name="name" id="name" />
		</div>
		<div class="form-group">
		<label for="description">Description</label>
		<input type="text" class="form-control" name="description" id="description" />
		</div>
	</form>
</div>
<?php
	include('footer.php');
?>