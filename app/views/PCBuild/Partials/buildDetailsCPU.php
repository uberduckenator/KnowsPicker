<?php
<<<<<<< HEAD
if(!isset($model['Build Details']))
	{
		echo"<form>
				<input type=button action=/Items/CPU>
			</form>";
=======
$pc_build_id = $model['Build']->pc_build_id;
if(!isset($model['Build Details']))
	{
		echo"<form action=/Items/CPU>
				<input type='hidden' name='pc_build_id' value=$pc_build_id>
				<input type=submit value= 'Add a CPU'/>
			</form>";;
>>>>>>> 8ac1a8ca910f132f053dd1e3e33d538143a8f238
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
<<<<<<< HEAD
			echo"<form>
					<input type=button action=/Items/CPU>
=======
			echo"<form action=/Items/CPU>
					<input type='hidden' name='pc_build_id' value=$pc_build_id>
					<input type=submit value= 'Add a CPU'/>
>>>>>>> 8ac1a8ca910f132f053dd1e3e33d538143a8f238
				</form>";
		}
	}
?>