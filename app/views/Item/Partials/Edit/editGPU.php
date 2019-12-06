
<h1>Edit GPU</h1>
	<?php
		$typeDetails = $model;
		$part_no = $typeDetails->part_no;
		$chipset = $typeDetails->chipset;
		$memory = $typeDetails->memory;
		$memory_type = $typeDetails->memory_type;
		$core_clock = $typeDetails->core_clock;
		$interface = $typeDetails->interface;
		$length = $typeDetails->length;
		$wattage = $typeDetails->wattage;

			echo "	<div class='form-group'>
					<label for='username'>Part No</label>
					<input type='text' class='form-control' name='part_no' id='part_no' value=$part_no> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Chipset</label>
					<input type='text' class='form-control' name='chipset' id='chipset' value=$chipset> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Memory</label>
					<input type='text' class='form-control' name='memory' id='memory' value=$memory> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Memory Type</label>
					<input type='text' class='form-control' name='memory_type' id='memory_type' value=$memory_type> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Core Clock</label>
					<input type='text' class='form-control' name='core_clock' id='core_clock' value=$core_clock> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Interface</label>
					<input type='text' class='form-control' name='interface' id='interface' value=$interface> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Length</label>
					<input type='text' class='form-control' name='length' id='length' value=$length> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Wattage</label>
					<input type='text' class='form-control' name='wattage' id='wattage' value=$wattage> 
					</div>";
		
	?>
