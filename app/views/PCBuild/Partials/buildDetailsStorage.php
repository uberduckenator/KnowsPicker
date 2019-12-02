<?php
if(!isset($model['Build Details']))
	{
		echo"<form>
				<a href=/Items/Storage><input type=button value=Add a storage device></a>
			</form>";
	}
	else
	{
		$notExist = 0;
		foreach($model['Build Details']['Item Info'] as $item)
		{
			$itemType = $item->item_type;
			if($itemType == 'Storage')
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
					<a href=/Items/Storage><input type=button value = Add a storage device></a>
				</form>";
		}
	}
?>