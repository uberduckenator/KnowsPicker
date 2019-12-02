<?php
	include('header.php');
?>
<<<<<<< HEAD
<h3>PC Build Setup</h3>
<div>
	<div>
=======
<div class = "container">
	<h3>PC Build Setup</h3>
	<div class = "container">
>>>>>>> 8ac1a8ca910f132f053dd1e3e33d538143a8f238
		<h4>CPU</h4>
		<?php
			include('Partials/buildDetailsCPU.php');
		?>
	</div>

<<<<<<< HEAD
	<div>
		<h4>CPU Cooler</h4>
		<?php
		?>
	</div>

	<div>
		<h4>GPU</h4>
		<?php

		?>
	</div>

	<div>
		<h4>Motherboard</h4>
		<?php

		?>
	</div>

	<div>
		<h4>PC Case</h4>
		<?php

		?>
	</div>

	<div>
		<h4>PSU</h4>
		<?php

		?>
	</div>

	<div>
		<h4>RAM</h4>
		<?php

		?>
	</div>

	<div>
		<h4>Storage</h4>
		<?php


=======
	<div class = "container">
		<h4>CPU Cooler</h4>
		<?php
			include('Partials/buildDetailsCPUCooler.php');
		?>
	</div>

	<div class = "container">
		<h4>GPU</h4>
		<?php
			include('Partials/buildDetailsGPU.php');
		?>
	</div>

	<div class = "container">
		<h4>Motherboard</h4>
		<?php
			include('Partials/buildDetailsMotherboard.php');
		?>
	</div>

	<div class = "container">
		<h4>PC Case</h4>
		<?php
			include('Partials/buildDetailsPcCase.php');
		?>
	</div>

	<div class = "container">
		<h4>PSU</h4>
		<?php
			include('Partials/buildDetailsPSU.php');
		?>
	</div>

	<div class = "container">
		<h4>RAM</h4>
		<?php
			include('Partials/buildDetailsRAM.php');
		?>
	</div>

	<div class = "container">
		<h4>Storage</h4>
		<?php
			include('Partials/buildDetailsStorage.php');
>>>>>>> 8ac1a8ca910f132f053dd1e3e33d538143a8f238
		?>
	</div>
</div>
<?php
	include('footer.php');
?>