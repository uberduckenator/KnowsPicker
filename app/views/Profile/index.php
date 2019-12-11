<?php
	include("header.php");
?>

<div class = "container">
	<h3>Profile</h3>
	<div class="container">
	<h4>Profile Information</h4>
	<?php
		$item = $model['Profile'];
			echo "<a href=/Profile/editProfile/$item->user_id>Edit Profile</a>
			<p>first name: $item->first_name<br>
				last name: $item->last_name<br>
				email: $item->email<br>
				city: $item->city<br>
				street: $item->street_address<br>
				postal: $item->postal_code<br>
				country: $item->country_name"; 	 
	?>
	</div>
	<div class="container">
		<?php
			$item = $model['Payment'];
			echo"<a href=/Profile/editPayment/$item->user_id>Edit Payment</a><p>cardnumber: $item->cardnumber<br>
				cardholder: $item->cardholder<br>
				cvv2: $item->cvv2<br>
				expiration_date: $item->expiration_date</p>";
		?>
	</div>
</div>

<?php
	include("footer.php");
?>