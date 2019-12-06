<?php
	include('header.php');
?>
<div class = "container">
	<h3>PC Build Setup</h3>
	<?php
		$pc_build_id = $model['Build']->pc_build_id;
	?>
	<div class = "container">
		<?php
			$build_name = $model['Build']->name;
			$description = $model['Build']->description;
			echo"<h4>$build_name</h4>";
		?>
		<div class = "container">
		<h4>CPU</h4>
		<?php
			include('Partials/buildDetailsCPU.php');
		?>
		</div>

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
			?>
		</div>

		<form>
		<a href="/PCBuild/index"><input type="button" value="Done"></a>
		</form>
	</div>
</div>
<?php
	include('footer.php');
?>