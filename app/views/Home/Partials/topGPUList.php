<div class='topList'>
	<?php
	foreach ($model['CPU'] as $item) {
			//Loop through them here
			echo("<h4>$item->item_name</h4>");
			echo("<a href=/Items/Details/$item->item_id><img src='' alt=CpuImage></a>
				<a href=/Favorite/insert/$item->item_id>Favorite</a>");
		}
	?>
</div>