<?php
$pc_build_id = $model['Build']->pc_build_id;
if(!isset($model['Build Details']))
	{
		if ($_SESSION['user_id'] != $model['Build']->user_id)
		{
			echo"<p>No CPU chosen!</p>";
		}
		else
		{
			echo"<form action=/Items/CPU>
				<input type='hidden' name='pc_build_id' value=$pc_build_id>
				<input type=submit value= 'Add a CPU'/>
<<<<<<< HEAD
			</form>";;
=======
			</form>";
		}
>>>>>>> c8e26c5c5941d14dc7f262b3043d3c694a4261be
	}
	else
	{
		$notExist = 0;
		foreach($model['Build Details']['Item Info'] as $item)
		{
			$itemType = $item->item_type;
			if($itemType == 'CPU')
			{
				$item_name = $item->item_name;
				$item_price = $item->price;
				echo"<div><img alt = 'CPU'><p>Name: $item_name</p>";
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
			echo"<form action=/Items/CPU>
					<input type='hidden' name='pc_build_id' value=$pc_build_id>
					<input type=submit value= 'Add a CPU'/>
				</form>";
=======
			if ($_SESSION['user_id'] != $model['Build']->user_id)
			{
				echo"<p>No CPU chosen!</p>";
			}
			else
			{
				echo"<form action=/Items/CPU>
						<input type='hidden' name='pc_build_id' value=$pc_build_id>
						<input type=submit value= 'Add a CPU'/>
					</form>";
			}
>>>>>>> c8e26c5c5941d14dc7f262b3043d3c694a4261be
		}
	}
?>