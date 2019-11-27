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
	    $stmt = self::$_connection->prepare("INSERT INTO Tickets(title, description, status, user_id) VALUES(:first_name,:last_name)");
        $stmt->execute(['first_name'=>$this->first_name,
         'last_name'=>$this->last_name]);
    }

    public function delete(){
        $stmt = self::$_connection->prepare("DELETE FROM Person WHERE person_id = :person_id");
        $stmt->execute(['person_id'=>$this->person_id]);
    }

    public function update(){
        $stmt = self::$_connection->prepare("UPDATE Person SET first_name = :first_name, last_name = :last_name WHERE person_id = :person_id");
        $stmt->execute(['first_name'=>$this->first_name,
         'last_name'=>$this->last_name, 'person_id'=>$this->person_id]);
    }
}