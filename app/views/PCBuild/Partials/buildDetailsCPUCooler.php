<?php
if(!isset($model['Build Details']))
	{
		echo"<form>
				<input type=button action=/Items/CPUCooler>
			</form>";
	}
	else
	{
		$notExist = 0;
		foreach($model['Build Details']['Item Info'] as $item)
		{
			$itemType = $item->item_type;
			if($itemType == 'CPU')
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
			echo"<form>
					<input type=button action=/Items/CPUCooler>
				</form>";
		}
	}
?>