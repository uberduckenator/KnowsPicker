<?php
if ($model['Reviews'] == null)
{
	echo"<div class='container'><h6>No reviews for this item</h6></div>";
}
else
{
	foreach ($model['Reviews'] as $item)
	{
		echo"<div class='container'>
				<h5>$item->first_name $item->last_name</h5>
				<h6>$item->title</h6>
				<p>$item->message</p>
				<p>Reviewed on: $item->created_on</p>
			</div>";
	}	
}
?>