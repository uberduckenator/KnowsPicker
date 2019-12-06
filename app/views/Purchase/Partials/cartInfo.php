<?php
	$purchase = $model['Cart']; 
	$purchase_id = $purchase->purchase_id;
	$subtotal = $purchase->subtotal;
	//$total = $item->total;
	echo"<div class='container'>
			<div class='container'>
				<p>Subtotal: $$subtotal</p>
			</div>
		</div>";
?>