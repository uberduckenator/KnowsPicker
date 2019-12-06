<?php
$pc_build_id = $model['Build']->pc_build_id;
if(!isset($model['Build Details']))
	{
		if ($_SESSION['user_id'] != $model['Build']->user_id)
		{
			echo"<p>No Storage chosen!</p>";
		}
		else
		{
			echo"<form action=/Items/Storage>
				<input type='hidden' name='pc_build_id' value=$pc_build_id>
				<input type=submit value= 'Add a storage device'/>
			</form>";
		}
	}
	else
	{
		$notExist = 0;
		foreach($model['Build Details']['Item Info'] as $item)
		{
			$itemType = $item->item_type;
			if($itemType == 'Storage')
			{
				$item_id = $item->item_id;
				$item_name = $item->item_name;
				$item_price = $item->price;
				echo"<div><img alt = 'Storage'><p>Name: $item_name</p>";
				echo"<p>Price: $item_price</p>";
				foreach ($model['Build Details']['OtherInfo'] as $pc_build_info) {
					$other_item_id = $pc_build_info->item_id;
					$pc_build_details_id = $pc_build_info->pc_build_details_id;
					if ($other_item_id == $item_id)
					{
						echo"<a href='/PCBuild/removePart/$pc_build_details_id'>Remove</a>";
					}
				}
					echo"</div>";
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
				echo"<p>No Storage chosen!</p>";
			}
			else
			{
				echo"<form action=/Items/Storage>
					<input type='hidden' name='pc_build_id' value=$pc_build_id>
					<input type=submit value= 'Add a storage device'/>
				</form>";
			}
		}
	}
?>