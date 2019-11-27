<?php
	include ("header.php");
?>
<h3>Search Results for <?php echo "$model[SearchString]"?></h3>

<table>
<?php
	
	echo("<h3>$model[Error]</h3>");
	foreach ($model['Results'] as $item)
	{
		echo('<div class=item><tr><h3>$item->item_name</h3></br>');
		echo('<p>$"$item->price"</p></br>');
		echo('<p>Item type: "$item->item_type"</p></br>');
		echo('<p>Rating: "$item->rating"</p></br>');
		echo('<p>Stock: "$item->stock"</p></br>');
		echo('<p>Rebate: "$item->rebate</p></br>');
		echo('<h6>Company: </h6></br>');
		echo('<img = alt = img for item></br>');
		echo('<p></p></tr></div>');
	}

?>
</table>

<?php
	include ("footer.php");
?>