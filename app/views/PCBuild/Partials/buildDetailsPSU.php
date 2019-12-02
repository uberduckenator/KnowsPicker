<?php
if(!isset($model['Build Details']))
	{
		echo"<form>
				<a href=/Items/PSU><input type=button value = Add a power supply/></a>
			</form>";
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
			echo"<form>
					<a href=/Items/PSU><input type=button value = Add a power supply/></a>
				</form>";
		}
	}
?>