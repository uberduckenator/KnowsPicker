
<h1>Edit Storage</h1>
	<?php
		$typeDetails = $model;
		$part_no = $typeDetails->part_no;
		$capacity = $typeDetails->capacity;
		$type = $typeDetails->type;
		$cache = $typeDetails->cache;
		$form_factor = $typeDetails->form_factor;
		$interface = $typeDetails->interface;
		$nvme = $typeDetails->nvme;

			echo "	<div class='form-group'>
					<label for='username'>Part No</label>
					<input type='text' class='form-control' name='part_no' id='part_no' value=$part_no> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Capacity</label>
					<input type='text' class='form-control' name='capacity' id='capacity' value=$capacity> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Type</label>
					<input type='text' class='form-control' name='type' id='type' value=$type> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Cache</label>
					<input type='text' class='form-control' name='cache' id='cache' value=$cache> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Form Factor</label>
					<input type='text' class='form-control' name='form_factor' id='form_factor' value=$form_factor> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Interface</label>
					<input type='text' class='form-control' name='interface' id='interface' value=$interface> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>NVMe</label>
					<input type='text' class='form-control' name='nvme' id='nvme' value=$nvme> 
					</div>";
	?>
