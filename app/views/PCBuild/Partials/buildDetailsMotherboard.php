<?php
$pc_build_id = $model['Build']->pc_build_id;
if(!isset($model['Build Details']))
	{
		echo"<form action=/Items/Motherboard>
				<input type='hidden' name='pc_build_id' value=$pc_build_id>
				<input type=submit value= 'Add a Motherboard'/>
			</form>";
	}
	else
	{
		$notExist = 0;
		foreach($model['Build Details']['Item Info'] as $item)
		{
			$itemType = $item->item_type;
			if($itemType == 'Motherboard')
			{
				echo"";
			}
			else
			{
				$notExist += 1;
			}
		}
		if ($notExist == sizeof($model['Build Details']['Item Info']))
		{
			echo"<form action=/Items/Motherboard>
					<input type='hidden' name='pc_build_id' value=$pc_build_id>
					<input type=submit value= 'Add a Motherboard'/>
				</form>";
		}
	}
?>