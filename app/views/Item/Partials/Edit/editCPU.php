
<h1>Edit CPU</h1>
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
					<input type='text' class='form-control' name='model' id='model' value=$modelType> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Socket</label>
					<input type='text' class='form-control' name='socket' id='socket' value=$socket> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Cores</label>
					<input type='text' class='form-control' name='cores' id='cores' value=$socket> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Clock Speed</label>
					<input type='text' class='form-control' name='clock_speed' id='clock_speed' value=$clock_speed> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Wattage</label>
					<input type='text' class='form-control' name='wattage' id='wattage' value=$wattage> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Series</label>
					<input type='text' class='form-control' name='series' id='series' value=$series> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Integrated Graphics</label>
					<input type='text' class='form-control' name='integrated_graphics' id='integrated_graphics' value=$integrated_graphics> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>CPU Cooler</label>
					<input type='text' class='form-control' name='cpu_cooler' id='cpu_cooler' value=$cpu_cooler> 
					</div>";
		
	?>
