<?php

class Ticket extends Model
{
	public $ticket_id;
	public $title;
	public $description;
	public $status;
	public $created_on;
	public $closed_on;
	public $admin_id;
	public $user_id;

    public function __construct()
    {   
        parent::__construct();
    } 

    public function getAll(){
        $stmt = self::$_connection->prepare("SELECT * FROM Tickets");
        $stmt->execute();
    	$stmt->setFetchMode(PDO::FETCH_CLASS, 'Ticket');
		return $stmt->fetchAll();
    }

	public function find($ticket_id){
        $stmt = self::$_connection->prepare("SELECT * FROM Tickets WHERE ticket_id = :ticket_id");
        $stmt->execute(['ticket_id'=>$ticket_id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Ticket');
        return $stmt->fetch();
    }

    public function insert(){
	    $stmt = self::$_connection->prepare("INSERT INTO Tickets(title, description, status, user_id) VALUES(:title,:description,:status,:user_id)");
        $stmt->execute(['title'=>$this->title,
         'description'=>$this->description, 'status'=>$this->status, 'user_id'=>$this->user_id]);
    }

    public function close($ticket_id){
        $stmt = self::$_connection->prepare("UPDATE Tickets SET status = :status WHERE ticket_id = :ticket_id");
        $stmt->execute(['status'=>$this->status]);
    }
}