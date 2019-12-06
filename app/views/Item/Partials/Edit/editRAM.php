
<h1>Edit RAM</h1>
	<?php
		$typeDetails = $model;
		$part_no = $typeDetails->part_no;
		$speed = $typeDetails->speed;
		$modules = $typeDetails->modules;

			echo "	<div class='form-group'>
					<label for='username'>Part No</label>
					<input type='text' class='form-control' name='part_no' id='part_no' value=$part_no> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Speed</label>
					<input type='text' class='form-control' name='speed' id='speed' value=$speed> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Modules</label>
					<input type='text' class='form-control' name='modules' id='modules' value=$modules> 
					</div>";
		
	?>
