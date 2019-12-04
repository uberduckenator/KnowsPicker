<?php
$pc_build_id = $model['Build']->pc_build_id;
if(!isset($model['Build Details']))
	{
		if ($_SESSION['user_id'] != $model['Build']->user_id)
		{
			echo"<p>No RAM chosen!</p>";
		}
		else
		{
			echo"<form action=/Items/RAM>
				<input type='hidden' name='pc_build_id' value=$pc_build_id>
				<input type=submit value= 'Add RAM sticks'/>
			</form>";
		}
	}
	else
	{
		$notExist = 0;
		foreach($model['Build Details']['Item Info'] as $item)
		{
			$itemType = $item->item_type;
			if($itemType == 'RAM')
			{
				$item_name = $item->item_name;
				$item_price = $item->price;
				echo"<div><img alt = 'RAM'><p>Name: $item_name</p>";
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
				echo"<p>No RAM chosen!</p>";
			}
			else
			{
				echo"<form action=/Items/RAM>
					<input type='hidden' name='pc_build_id' value=$pc_build_id>
					<input type=submit value= 'Add a RAM sticks'/>
				</form>";
			}
		}
	}
?>