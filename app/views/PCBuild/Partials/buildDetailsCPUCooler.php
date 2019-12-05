<?php
$pc_build_id = $model['Build']->pc_build_id;
if(!isset($model['Build Details']))
	if ($_SESSION['user_id'] != $model['Build']->user_id)
		{
			echo"<p>No CPU Cooler chosen!</p>";
		}
		else
		{
			echo"<form action=/Items/CPUCooler>
				<input type='hidden' name='pc_build_id' value=$pc_build_id>
				<input type=submit value= 'Add a CPU cooler'/>
			</form>";
		}
	else
	{
		$notExist = 0;
		foreach($model['Build Details']['Item Info'] as $item)
		{
			$itemType = $item->item_type;
<<<<<<< HEAD

=======
>>>>>>> c8e26c5c5941d14dc7f262b3043d3c694a4261be
			if($itemType == 'CPUCooler')
			{
				$item_name = $item->item_name;
				$item_price = $item->price;
				echo"<div><img alt = 'CPU Cooler'><p>Name: $item_name</p>";
				echo"<p>Price: $item_price</p>
					</div>";
			}
			else
			{
				$notExist += 1;
			}
		}
		if ($notExist == sizeof($model['Build Details']['Item Info']))
		{
<<<<<<< HEAD
			echo"<form action=/Items/CPUCooler>
=======
			if ($_SESSION['user_id'] != $model['Build']->user_id)
			{
				echo"<p>No CPU Cooler chosen!</p>";
			}
			else
			{
				echo"<form action=/Items/CPUCooler>
>>>>>>> c8e26c5c5941d14dc7f262b3043d3c694a4261be
					<input type='hidden' name='pc_build_id' value=$pc_build_id>
					<input type=submit value= 'Add a CPU cooler'/>
				</form>";
			}
		}
	}
?>