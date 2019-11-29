<div id = "typeDetails">
	<?php
		$detail = $model['ItemType'];
		echo"<p>Model: $detail->model</p>";
		echo"<p>Socket: $detail->socket</p>";
		echo"<p>Cores: $detail->cores</p>";
		echo"<p>Clock Speed: $detail->clock_speed</p>";
		echo"<p>Wattage: $detail->wattage</p>";
		echo"<p>Series: $detail->series</p>";
		echo"<p>Integrated Graphics: ";
		if ($detail->integrated_graphics == 0)
			echo"Yes</p>";
		else
			echo"No</p>";
		echo"<p>Cpu Cooler: ";
		if ($detail->cpu_cooler == 0)
			echo"Yes</p>";
		else
			echo"No</p>";
	?>
</div>