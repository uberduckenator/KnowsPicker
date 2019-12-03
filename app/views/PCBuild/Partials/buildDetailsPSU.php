<?php
$pc_build_id = $model['Build']->pc_build_id;
if(!isset($model['Build Details']))
	{
		if ($_SESSION['user_id'] != $model['Build']->user_id)
		{
			echo"<p>No Power Supply chosen!</p>";
		}
		else
		{
		echo"<form action=/Items/PSU>
				<input type='hidden' name='pc_build_id' value=$pc_build_id>
				<input type=submit value= 'Add a PSU'/>
			</form>";
		}
	}
	else
	{
		$notExist = 0;
		foreach($model['Build Details']['Item Info'] as $item)
		{
			$itemType = $item->item_type;
			if($itemType == 'PSU')
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
			if ($_SESSION['user_id'] != $model['Build']->user_id)
			{
				echo"<p>No Power Supply chosen!</p>";
			}
			else
			{
				echo"<form action=/Items/PSU>
					<input type='hidden' name='pc_build_id' value=$pc_build_id>
					<input type=submit value= 'Add a PSU'/>
				</form>";
			}
		}
	}
?>