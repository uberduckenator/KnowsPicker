<?php
	include ("header.php");
?>
<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
	<script src="/js/bootstrap.js"></script>
<div class="ticketListing">
	<div class="container">
		<h1>Service Tickets</h1>
		<?php

		function displayStatus($status) {
    		if ($status == 0) {
				$status = "Open";
			} else if ($status == 1) {
				$status = "In Progress";
		 	} else{
				$status = "Closed";
			}
			return $status;
		}

		if(isset($_SESSION['role']))
		{
			if($_SESSION['role'] == 'company')
			{
				if ($model == null)
				{
					echo('<p>You have not submitted any service tickets.</p>');
					echo("<a class='btn' href='Ticket/createCompanyTicket'>Create a ticket here</a>");
				}
				else
				{
					//var_dump($model);
					foreach($model as $tickets)
					{
						$ticketId = $tickets->ticket_id;
					 	$status = $tickets->status;
					 	$status = displayStatus($status);
					 	echo("<div class='panel panel-default'>");
			 			echo("<div class='panel-heading'>");
			 			echo("<h3><a href=''>$tickets->title</a></h3>");//TODO add link to ticket details
			 			echo("</div>");
					 	echo("<p>$tickets->description</p></br>");
					 	echo("<p>$tickets->created_on</>");
					 	echo("<h5>$status</h5>");
					 	echo("</div>");
					}
					echo("<a class='btn' href='Ticket/createCompanyTicket'>Create a ticket here</a>");
				}
			}
			else if ($_SESSION['role'] == 'admin')
			{
				if ($model == null)
				{
					echo('<p>No service tickets have been placed.</p>');
				}
				else
				{
					foreach($model as $tickets)
					{
					 	$ticketId = $tickets->ticket_id;
					 	$status = $tickets->status;
					 	$status = displayStatus($status);
					 	echo("<div class='panel panel-default'>");
					 	echo("<div class='panel-heading'>");
			 			echo("<h3><a href=''>$tickets->title</a></h3>");//TODO add link to ticket details
			 			echo("</div>");
					 	echo("<p>$tickets->description</p></br>");
					 	echo("<p>$tickets->created_on</>");
					 	echo("<h5>$status</h5>");
					 	if ($status == "Open" || $status == "In Progress") {
					 		echo("<a class='btn btn-light' href='Ticket/close/$ticketId'>Close Ticket</a>");
					 	}
					 	echo("</div>");
					}
				}
			} else {
				if ($model == null)
				{
					echo('<p>You have not submitted any service tickets.</p>');
					echo("<a class='btn' href='Ticket/createUserTicket'>Create a ticket here</a>");
				}
				else
				{
					foreach($model as $tickets)
					{
			 			$ticketId = $tickets->ticket_id;
					 	$status = $tickets->status;
					 	$status = displayStatus($status);
					 	echo("<div class='panel panel-default'>");
			 			echo("<div class='panel-heading'>");
			 			echo("<h3><a href=''>$tickets->title</a></h3>");//TODO add link to ticket details
			 			echo("</div>");
					 	echo("<p>$tickets->description</p></br>");
					 	echo("<p>$tickets->created_on</>");
					 	echo("<h5>$status</h5>");
					 	echo("</div>");
					}
					echo("<a class='btn' href='Ticket/createCompanyTicket'>Create a ticket here</a>");
				}	
			}	
		}
		?>
	</div>
</div>
<?php 
	include("footer.php");
?>