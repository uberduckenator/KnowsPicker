
<h1>Edit CPU Cooler</h1>
	<?php
		$typeDetails = $model;
		$modelType = $typeDetails->model;
		$sockets = $typeDetails->sockets;
		$fan_rpm = $typeDetails->fan_rpm;
		$height = $typeDetails->height;

			echo "	<div class='form-group'>
					<label for='username'>Model</label>
					<input type='text' class='form-control' name='modelType' id='modelType' value=$modelType> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Sockets</label>
					<input type='text' class='form-control' name='sockets' id='sockets' value=$sockets> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Fan RPM</label>
					<input type='text' class='form-control' name='fan_rpm' id='fan_rpm' value=$fan_rpm> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Height</label>
					<input type='text' class='form-control' name='height' id='height' value=$height> 
					</div>";
		
	?>
