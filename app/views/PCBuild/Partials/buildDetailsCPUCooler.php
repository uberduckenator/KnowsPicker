<?php
if(!isset($model['Build Details']))
	{
		echo"<form>
				<a href=/Items/CPUCooler><input type=button value= Add a CPU cooler/></a>
			</form>";
	}
	else
	{
		$notExist = 0;
		foreach($model['Build Details']['Item Info'] as $item)
		{
			$itemType = $item->item_type;
			if($itemType == 'CPUCooler')
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
					<a href=/Items/CPUCooler><input type=button action=/Items/CPUCooler value= Add a CPU cooler></a>
				</form>";
		}
	}
?>