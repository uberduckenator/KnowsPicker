<?php
if(!isset($model['Build Details']))
	{
		echo"<form>
				<a href=/Items/CPU><input type=button value = Add a CPU/></a>
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
				echo"";
			}
			else
			{
				$notExist += 1;
			}
		}
		if ($notExist == sizeof($model['Build Details']['Item Info']))
		{
			echo"<form>
					<a href=/Items/CPU><input type=button value = Add a CPU/></a>
				</form>";
		}
	}
?>