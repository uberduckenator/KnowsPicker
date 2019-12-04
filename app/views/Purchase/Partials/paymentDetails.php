<?php
if (!isset($model['Payment']))
{
	echo
	"<form method='post' action=' class='form-horizontal'>
		<div class='form-group'>
			<label for='cardnumber'>Card Number</label>
			<input type='text' class='form-control' name='cardnumber' id='cardnumber' />
		</div>
		<div class='form-group'>
			<label for='cardholder'>Card Holder</label>
			<input type='text' class='form-control' name='cardholder' id='cardholder' />
		</div>
		<div class='form-group'>
			<label for='cvv2'>CVV2</label>
			<input type='text' class='form-control' name='cvv2' id='cvv2' />
		</div>
		<div class='form-group'>
			<label>Expiration Date</label>
			<select name ='expiration_month'>
				<option value=1>01</option>
				<option value=2>02</option>
				<option value=3>03</option>
				<option value=4>04</option>
				<option value=5>05</option>
				<option value=6>06</option>
				<option value=7>07</option>
				<option value=8>08</option>
				<option value=9>09</option>
				<option value=10>10</option>
				<option value=11>11</option>
				<option value=12>12</option>
			</select>
			<p>/</p>
			<select name = 'expiration_year'>
				<option>19</option>
				<option>20</option>
				<option>21</option>
				<option>22</option>
				<option>23</option>
				<option>24</option>
				<option>25</option>
			</select>
		</div>
		
		<div class='form-group'>
			<input type='submit' name='action' value='Update'/>
		</div>
	</form>";
}
else
{
	$theModel = $model['Payment'];
	$cardnumber = $theModel->cardnumber;
	$cardholder = $theModel->cardholder;
	$cvv2 = $theModel->cvv2;
	$expiration_date = $theModel->expiration_date;

	echo"<div class='container'><label>Cardnumber: </label><p>$cardnumber</p>
	<label>Card Holder: </label><p>$cardholder</p>
	<label>CVV2: </labe><p>$cvv2</p>
	<label>Expiration Date: </label><p>$expiration_date</p></div>
	";
}
?>