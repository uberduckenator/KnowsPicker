<div class='topList'>
	<h3>Top Storage Devices</h3>
	<?php
	foreach ($model['Storage'] as $item) {
			//Loop through them here
			echo("<h4>$item->item_name</h4>");
			echo("<a href=Items/Details/'$item->item_id'><img src='' alt=StorageImg></a>
				<a href=/Favorite/insert/$item->item_id>Favorite</a>");
		}
	?>
</div>