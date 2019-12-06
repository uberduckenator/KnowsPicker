<?php

class TicketDetails extends Model
{
	public $ticket_details_id;
    public $sender_id;
    public $receiver_id;
    public $message;
	public $created_on;
	public $ticket_id;

    public function __construct()
    {   
        parent::__construct();
    } 

    public function getAll(){
        $stmt = self::$_connection->prepare("SELECT * FROM Ticket_Details");
        $stmt->execute();
    	$stmt->setFetchMode(PDO::FETCH_CLASS, 'Ticket_Details');
		return $stmt->fetchAll();
    }

    public function getUserTickets($user_id){
        $stmt = self::$_connection->prepare("SELECT * FROM Tickets WHERE user_id = :user_id");
        $stmt->execute(['user_id'=>$user_id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Ticket');
        return $stmt->fetchAll();
    }

    public function getCompanyTickets($company_id){
        $stmt = self::$_connection->prepare("SELECT * FROM Tickets WHERE company_id = :company_id");
        $stmt->execute(['company_id'=>$company_id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Ticket');
        return $stmt->fetchAll();
    }

	public function find($ticket_id){
        $stmt = self::$_connection->prepare("SELECT * FROM Tickets WHERE ticket_id = :ticket_id");
        $stmt->execute(['ticket_id'=>$ticket_id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Ticket');
        return $stmt->fetch();
    }

    public function insertUser(){
	    $stmt = self::$_connection->prepare("INSERT INTO Tickets(title, description, status, user_id) VALUES(:title,:description,:status,:user_id)");
        $stmt->execute(['title'=>$this->title, 'description'=>$this->description, 'status'=>$this->status, 'user_id'=>$this->user_id]);
    }

    public function insertCompany(){
        $stmt = self::$_connection->prepare("INSERT INTO Tickets(title, description, status, company_id) VALUES(:title,:description,:status,:company_id)");
        $stmt->execute(['title'=>$this->title, 'description'=>$this->description, 'status'=>$this->status, 'company_id'=>$this->company_id]);
    }

    public function update(){
        $stmt = self::$_connection->prepare("INSERT INTO Tickets(title, description, status, user_id) VALUES(:title,:description,:status,:user_id)");
        $stmt->execute(['title'=>$this->title, 'description'=>$this->description, 'status'=>$this->status, 'user_id'=>$this->user_id]);
    }

    public function close($ticket_id){
        $stmt = self::$_connection->prepare("UPDATE Tickets SET status = :status WHERE ticket_id = :ticket_id");
        $stmt->execute(['status'=>$this->status]);
    }
}