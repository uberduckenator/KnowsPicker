
<h1>Edit Motherboard</h1>
	<?php
		$typeDetails = $model;
		$modelType = $typeDetails->model;
		$socket = $typeDetails->socket;
		$form_factor = $typeDetails->form_factor;
		$ram_slots = $typeDetails->ram_slots;
		$max_ram = $typeDetails->max_ram;
		$memory_speed = $typeDetails->memory_speed;
		$pci_e_slots = $typeDetails->pci_e_slots;
		$onboard_ethernet = $typeDetails->onboard_ethernet;
		$sata_ports = $typeDetails->sata_ports;
		$m2_slots = $typeDetails->m2_slots;
		$wifi = $typeDetails->wifi;

			echo "	<div class='form-group'>
					<label for='username'>Model</label>
					<input type='text' class='form-control' name='modelType' id='modelType' value=$modelType> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Socket</label>
					<input type='text' class='form-control' name='socket' id='socket' value=$socket> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Form Factor</label>
					<input type='text' class='form-control' name='form_factor' id='form_factor' value=$form_factor> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>RAM Slots</label>
					<input type='text' class='form-control' name='ram_slots' id='ram_slots' value=$ram_slots> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Max RAM</label>
					<input type='text' class='form-control' name='max_ram' id='max_ram' value=$max_ram> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Memory Speed</label>
					<input type='text' class='form-control' name='memory_speed' id='memory_speed' value=$memory_speed> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>PCI E Slots</label>
					<input type='text' class='form-control' name='pci_e_slots' id='pci_e_slots' value=$pci_e_slots> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Onboard Ethernet</label>
					<input type='text' class='form-control' name='onboard_ethernet' id='onboard_ethernet' value=$onboard_ethernet> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>SATA Ports</label>
					<input type='text' class='form-control' name='sata_ports' id='sata_ports' value=$sata_ports> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>M2 Slots</label>
					<input type='text' class='form-control' name='m2_slots' id='m2_slots' value=$m2_slots> 
					</div>";

			echo "	<div class='form-group'>
					<label for='username'>Wifi</label>
					<input type='text' class='form-control' name='wifi' id='wifi' value=$wifi> 
					</div>";
		
	?>
