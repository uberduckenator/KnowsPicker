<div id = "typeDetails">
	<?php
		$detail = $model['ItemType'];
		echo"<p>Model: $detail->model</p>";
		echo"<p>Socket: $detail->sockets</p>";
		echo"<p>Fan RPM: $detail->fan_rpm</p>";
		echo"<p>Height: $detail->clock_speed</p>";
	?>
</div>