<div class='topList'>
	<h3>Top Motherboards</h3>
	<?php
	foreach ($model['Motherboard'] as $item) {
			//Loop through them here
			echo("<h4>$item->item_name</h4>");
			echo("<a href=/Items/Details/'$item->item_id'><img src='' alt=MBImage></a>
				<a href=/Favorite/insert/$item->item_id>Favorite</a>");
		}
	?>
</div>