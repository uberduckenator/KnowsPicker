
<h1>PSU Details</h1>
	<?php
		$typeDetails = $model;
		$modelType = $typeDetails->model;
		$form_factor = $typeDetails->form_factor;
		$efficiency_rating = $typeDetails->efficiency_rating;
		$wattage = $typeDetails->wattage;
		$modular = $typeDetails->modular;
		$fanless = $typeDetails->fanless;

			echo "	<div class='form-group'>
					<label for='username'>Model</label>
					<input type='text' class='form-control' name='modelType' id='modelType' value=$modelType readonly> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Form Factor</label>
					<input type='text' class='form-control' name='form_factor' id='form_factor' value=$form_factor readonly> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Efficiency Rating</label>
					<input type='text' class='form-control' name='efficiency_rating' id='efficiency_rating' value=$efficiency_rating readonly> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Wattage</label>
					<input type='text' class='form-control' name='wattage' id='wattage' value=$wattage readonly> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Modular</label>
					<input type='text' class='form-control' name='modular' id='modular' value=$modular readonly> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Fanless</label>
					<input type='text' class='form-control' name='fanless' id='fanless' value=$fanless readonly> 
					</div>";
		
	?>
