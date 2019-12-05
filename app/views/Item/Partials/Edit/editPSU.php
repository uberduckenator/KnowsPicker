
<h1>Edit PSU</h1>
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
					<input type='text' class='form-control' name='modelType' id='modelType' value=$modelType> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Form Factor</label>
					<input type='text' class='form-control' name='form_factor' id='form_factor' value=$form_factor> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Efficiency Rating</label>
					<input type='text' class='form-control' name='efficiency_rating' id='efficiency_rating' value=$efficiency_rating> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Wattage</label>
					<input type='text' class='form-control' name='wattage' id='wattage' value=$wattage> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Modular</label>
					<input type='text' class='form-control' name='modular' id='modular' value=$modular> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Fanless</label>
					<input type='text' class='form-control' name='fanless' id='fanless' value=$fanless> 
					</div>";
		
	?>
