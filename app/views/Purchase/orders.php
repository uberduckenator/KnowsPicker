<?php
	include("header.php");
?>

	<div class="container">
		<table style="width 100%">
		<tr>
			<th>OrderDate</th>
			<th>Total</th>
			<th>Status</th>
		</tr>
		<?php
			foreach ($model as $item)
			{
				$purchase_id = $item->purchase_id;
				$date = $item->purchased_on;
				$total = $item->total;
				$status = $item->status;
				echo"<tr>
						<td><a href='/Purchase/orderDetails/$purchase_id'>$date</a></td>
						<td>$total</td>";
				if($status == 1)
				{
					echo"<td>Being delivered</td>";
					echo"<td><a href=/Purchase/arrive/$purchase_id>Set status arrived</a></td>";
				}
				else
				{
					echo"<td>Arrived</td>";
				}
				echo"</tr>";
			}
		?>
		</table>
	</div>

<?php
	include("footer.php");
?>