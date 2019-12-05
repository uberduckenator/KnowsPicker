
<h1>Edit PC Case</h1>
	<?php
		$typeDetails = $model;
		$type = $typeDetails->type;
		$power_supply = $typeDetails->power_supply;
		$mb_form_factor = $typeDetails->mb_form_factor;
		$max_gpu_length = $typeDetails->max_gpu_length;
		$internal_2_5_bays = $typeDetails->internal_2_5_bays;
		$internal_3_5_bays = $typeDetails->internal_3_5_bays;

			echo "	<div class='form-group'>
					<label for='username'>Type</label>
					<input type='text' class='form-control' name='type' id='type' value=$type> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Power Supply</label>
					<input type='text' class='form-control' name='power_supply' id='power_supply' value=$power_supply> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Motherboard Form Factor</label>
					<input type='text' class='form-control' name='mb_form_factor' id='mb_form_factor' value=$mb_form_factor> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Max GPU Lenght</label>
					<input type='text' class='form-control' name='max_gpu_length' id='max_gpu_length' value=$max_gpu_length> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Internal 2.5 Bays</label>
					<input type='text' class='form-control' name='internal_2_5_bays' id='internal_2_5_bays' value=$internal_2_5_bays> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Internal 3.5 Bays</label>
					<input type='text' class='form-control' name='internal_3_5_bays' id='internal_3_5_bays' value=$internal_3_5_bays> 
					</div>";
		
	?>
