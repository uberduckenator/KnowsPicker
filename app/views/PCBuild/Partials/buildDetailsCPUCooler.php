<?php
<<<<<<< HEAD
if(!isset($model['Build Details']))
	{
		echo"<form>
				<input type=button action=/Items/CPUCooler>
=======
$pc_build_id = $model['Build']->pc_build_id;
if(!isset($model['Build Details']))
	{
		echo"<form action=/Items/CPUCooler>
				<input type='hidden' name='pc_build_id' value=$pc_build_id>
				<input type=submit value= 'Add a CPU cooler'/>
>>>>>>> 8ac1a8ca910f132f053dd1e3e33d538143a8f238
			</form>";
	}
	else
	{
		$notExist = 0;
		foreach($model['Build Details']['Item Info'] as $item)
		{
			$itemType = $item->item_type;
<<<<<<< HEAD
			if($itemType == 'CPU')
=======
			if($itemType == 'CPUCooler')
>>>>>>> 8ac1a8ca910f132f053dd1e3e33d538143a8f238
			{
				echo"Success";
			}
			else
			{
				$notExist += 1;
			}
		}
		if ($notExist == sizeof($model['Build Details']['Item Info']))
		{
<<<<<<< HEAD
			echo"<form>
					<input type=button action=/Items/CPUCooler>
=======
			echo"<form action=/Items/CPUCooler>
					<input type='hidden' name='pc_build_id' value=$pc_build_id>
					<input type=submit value= 'Add a CPU cooler'/>
>>>>>>> 8ac1a8ca910f132f053dd1e3e33d538143a8f238
				</form>";
		}
	}
?>