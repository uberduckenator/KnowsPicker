<?php
	$address = $model['Address'];
	$first_name = $address->first_name;
	$last_name = $address->last_name;
	$street = $address->street_address;
	$city = $address->city;
	$postalcode = $address->postal_code;
	$country = $address->country_name;
	
	echo"<div class='container'>
				<div class='container'>
					<p>$first_name $last_name</p>
					<p>$street</p>
					<p>$city</p>
					<p>$postalcode</p>
					<p>$country</p>
				</div>
		</div>";
?>