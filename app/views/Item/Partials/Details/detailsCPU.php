<h1>CPU Details</h1>
	<?php
		$typeDetails = $model;
		$modelType = $typeDetails->model;
		$socket = $typeDetails->socket;
		$cores = $typeDetails->cores;
		$clock_speed = $typeDetails->clock_speed;
		$wattage = $typeDetails->wattage;
		$series = $typeDetails->series;
		$integrated_graphics = $typeDetails->integrated_graphics;
		$cpu_cooler = $typeDetails->cpu_cooler;

			echo "	<div class='form-group'>
					<label for='username'>Model</label>
					<input type='text' class='form-control' name='modelType' id='modelType' value=$modelType readonly> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Socket</label>
					<input type='text' class='form-control' name='socket' id='socket' value=$socket readonly> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Cores</label>
					<input type='text' class='form-control' name='cores' id='cores' value=$cores readonly> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Clock Speed</label>
					<input type='text' class='form-control' name='clock_speed' id='clock_speed' value=$clock_speed readonly> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Wattage</label>
					<input type='text' class='form-control' name='wattage' id='wattage' value=$wattage readonly> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Series</label>
					<input type='text' class='form-control' name='series' id='series' value=$series readonly> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Integrated Graphics</label>
					<input type='text' class='form-control' name='integrated_graphics' id='integrated_graphics' value=$integrated_graphics readonly> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>CPU Cooler</label>
					<input type='text' class='form-control' name='cpu_cooler' id='cpu_cooler' value=$cpu_cooler readonly> 
					</div>";
		
	?>