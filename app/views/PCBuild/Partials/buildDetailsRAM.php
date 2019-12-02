<?php
if(!isset($model['Build Details']))
	{
		echo"<form>
				<a href=/Items/RAM><input type=button value = Add RAM sticks/></a>
			</form>";
	}
	else
	{
		$notExist = 0;
		foreach($model['Build Details']['Item Info'] as $item)
		{
			$itemType = $item->item_type;
			if($itemType == 'RAM')
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
					<a href=/Items/RAM><input type=button value = Add RAM sticks/></a>
				</form>";
		}
	}
?>