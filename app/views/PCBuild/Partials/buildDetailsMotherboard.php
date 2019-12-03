<?php
$pc_build_id = $model['Build']->pc_build_id;
if(!isset($model['Build Details']))
	{
		if ($_SESSION['user_id'] != $model['Build']->user_id)
		{
				echo"<p>No Motherboard chosen!</p>";
		}
		else
		{
			echo"<form action=/Items/Motherboard>
				<input type='hidden' name='pc_build_id' value=$pc_build_id>
				<input type=submit value= 'Add a Motherboard'/>
			</form>";
		}
	}
	else
	{
		$notExist = 0;
		foreach($model['Build Details']['Item Info'] as $item)
		{
			$itemType = $item->item_type;
			if($itemType == 'Motherboard')
			{
				$item_name = $item->item_name;
				$item_price = $item->price;
				echo"<div><img alt = 'Motherboard'><p>Name: $item_name</p>";
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
			if ($_SESSION['user_id'] != $model['Build']->user_id)
			{
				echo"<p>No Motherboard chosen!</p>";
			}
			else
			{
				echo"<form action=/Items/Motherboard>
					<input type='hidden' name='pc_build_id' value=$pc_build_id>
					<input type=submit value= 'Add a Motherboard'/>
				</form>";
			}
		}
	}
?>