<div id = "typeDetails">
	<?php
		$detail = $model['ItemType'];
		echo"<p>Model: $detail->model</p>";
		echo"<p>Socket: $detail->socket</p>";
		echo"<p>Form Factor: $detail->form_factor</p>";
		echo"<p>Ram Slots: $detail->ram_slots</p>";
		echo"<p>Max Ram: $detail->max_ram</p>";
		echo"<p>Ram Type: $detail->series</p>";
		echo"<p>Memory Speed: $detail->memory_speed</p>";
		echo"<p>PCI E Slots: $detail->pci_e_slots</p>";
		echo"<p>Onboard Ethernet: $detail->memory_speed</p>";
		echo"<p>Sata Ports: $detail->memory_speed</p>";
		echo"<p>M2 Slots: $detail->m2_slots</p>";
		echo"<p>Wifi: $detail->wifi</p>";
	?>
</div>