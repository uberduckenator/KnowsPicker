<?php
define("OPENED_STATUS", 0);
define("IN_PROGRESS_STATUS",1);
define("CLOSED_STATUS",2);

class TicketController extends Controller{
	
	public function index()
	{
		if(isset($_SESSION['role']))
		{
			if($_SESSION['role'] == 'company')
			{
				$ticket = $this->model('Ticket');
				$all_company_tickets = $ticket->getCompanyTickets($_SESSION['company_id']);
				$this->view('Ticket/index', $all_company_tickets);
			} 
			else if ($_SESSION['role'] == 'user') 
			{
				$ticket = $this->model('Ticket');
				$all_user_tickets = $ticket->getUserTickets($_SESSION['user_id']);
				$this->view('Ticket/index', $all_user_tickets);
			}else{
			//display all tickets to admin accounts
			$ticket = $this->model('Ticket');
			$all_tickets = $ticket->getAll();
			$this->view('Ticket/index', $all_tickets);	
			}
		}
		
	}

	public function createUserTicket(){
		if(!isset($_POST['action'])){
			$this->view('Ticket/createUserTicket');	
		}else{
			$ticket = $this->model('Ticket');
			$ticket->title = $_POST['title'];
			$ticket->description = $_POST['description'];
			$ticket->status = OPENED_STATUS;
			$ticket->user_id = $this->model('UserProfile')->getUser($_SESSION["login_id"])->user_id;
			$ticket->insertUser();
			//redirecttoaction
			header('location:/Ticket/index');
		}
	}

	public function createCompanyTicket(){
		if(!isset($_POST['action'])){
			$this->view('Ticket/createCompanyTicket');	
		}else{
			$ticket = $this->model('Ticket');
			$ticket->title = $_POST['title'];
			$ticket->description = $_POST['description'];
			$ticket->status = OPENED_STATUS;
			$ticket->company_id = $this->model('CompanyProfile')->getCompany($_SESSION["login_id"])->company_id;
			$ticket->insertCompany();
			//redirecttoaction
			header('location:/Ticket/index');
		}
	}

	public function edit($ticket_id){
		$theTicket = $this->model('Ticket')->find($ticket_id);
		if(!isset($_POST['action'])){
			$this->view('Ticket/edit');	
		}else{
			$theTicket->title = $_POST['title'];
			$theTicket->description = $_POST['description'];
			$theTicket->status = $_POST['status']; //TODO: ADD STATUS SELECT LIST TO UPDATE FORM
			$theTicket->admin_id = $this->model('AdminProfile')->getUser($_SESSION["login_id"]);
			$theTicket->update();
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
			$theTicket->close($theTicket->ticket_id);
			//redirecttoaction
			header('location:/Ticket/index');
		}
	}
}
?>
