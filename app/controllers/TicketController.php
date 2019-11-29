<?php
define("OPENED_STATUS", 0);
define("IN_PROGRESS_STATUS",1);
define("CLOSED_STATUS",2);

class TicketController extends Controller{
	
	public function index()
	{
		//display all tickets to admin accounts
		$ticket = $this->model('Ticket');
		$all_tickets = $ticket->getAll(); 
		$this->view('ticket/index');
	}

	public function create(){
		if(!isset($_POST['action'])){
			$this->view('Ticket/create');	
		}else{
			$ticket = $this->model('Ticket');
			$ticket->title = $_POST['title'];
			$ticket->description = $_POST['description'];
			$ticket->status = OPENED_STATUS;
			$ticket->user_id = $this->model('UserProfile')->getUser($_SESSION["login_id"]);
			$ticket->insert();
			//redirecttoaction
			header('location:/Ticket/index');
		}
	}

	public function close($ticket_id){
		$theTicket = $this->model('Ticket')->find($ticket_id);
		if(!isset($_POST['action'])){
			$this->view('Ticket/close', $theTicket);	
		}else{
			$theTicket->status = CLOSED_STATUS;
			$theTicket->close();
			//redirecttoaction
			header('location:/Ticket/index');
		}
	}
}
?>
