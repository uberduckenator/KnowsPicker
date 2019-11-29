<div id = "typeDetails">
	<?php
		$detail = $model['ItemType'];
		echo"<p>Part Number: $detail->part_no</p>";
		echo"<p>Chipset: $detail->socket</p>";
		echo"<p>Memory: $detail->memory</p>";
		echo"<p>Memory Type: $detail->memory_type</p>";
		echo"<p>Core Clock: $detail->core_clock</p>";
		echo"<p>Interface: $detail->interface</p>";
		echo"<p>Length: $detail->length</p>";
		echo"<p>Wattage: $detail->wattage</p>";
	?>
</div>