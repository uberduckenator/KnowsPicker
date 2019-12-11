<html>
<head>
	<title>Edit Payment</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<h1>Edit</h1>
<div class="container">
	<h3>Original</h3>
	<div class="container">
	<?php
		$item = $model;
			echo"<p>cardnumber: $item->cardnumber<br>
				cardholder: $item->cardholder<br>
				cvv2: $item->cvv2<br>
				expiration_date: $item->expiration_date</p>";
	?>
	</div>
</div>
	<div class="container">
	<form method='post' class='form-horizontal'>
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
	</form>
	</div>
</body>
</html>
