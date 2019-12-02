<?php

class Purchase extends Model
{
	public $purchase_id;//maybe for future use

	//Use these
	public $status = 0;
	public $total;
	public $payment_id;
	public $user_id;
	public $purchased_on = null;//Null on default
	public $payment_confirm;
	public $shipping_id = null;

	public function __construct()
	{
		parent::__construct();
	}

	public function insert()
	{
		$stmt = self::$_connection->prepare("INSERT INTO purchase (purchase_id, status, total, payment_id, user_id, purchased_on, payment_confirm, shipping_id) VALUES (:purchase_id, :status, :total, :payment_id, :user_id, :purchased_on, :payment_confirm, :shipping_id)");
		$stmt->execute(['purchase_id'=>$this->purchase_id, 'status'=>$this->status,'total'=>$this->total, 'payment_id'=>$this->payment_id, 'user_id'=>$this->user_id, 'purchased_on'=>$this->purchased_on, 'payment_confirm'=>$this->payment_confirm, 'shipping_id'=>$this->shipping_id]);
		$this->purchase_id = self::$_connection->lastInsertId();
	}

	public function delete($purchase_id)
	{
		$stmt = self::$_connection->prepare("DELETE FROM purchase WHERE purchase_id = :purchase_id");
		$stmt->execute(['purchase_id'=>$purchase_id]);
	}

	public function updateDate($purchase_id)
	{
		$stmt = self::$_connection->prepare("UPDATE purchase SET purchased_on = :purchased_on WHERE purchase_id = :purchase_id");
		$stmt->execute(['purchased_on'=>$this->purchased_on, 'purchase_id'=>$purchase_id]);
	}

	public function updateStatus($purchase_id)
	{
		$stmt = self::$_conneciton->prepare("UPDATE purchase SET status = :status WHERE purchase_id = :purchase_id");
		$stmt->execute(['status'=>$this->status, 'purchase_id'=>$purchase_id])
	}

	//Not sure about payment_confirm...

	//Maybe used for admins or something
	public function getAll()
	{
		$stmt = self::$_connection->prepare("SELECT * FROM purchase");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Purchase');
		return $stmt->fetch();
	}

	//Get user's cart
	public function get($user_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM purchase WHERE user_id = :user_id AND status = 0");
		$stmt->execute(['user_id'=>$user_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Purchase');
		return $stmt->fetch();
	}

<<<<<<< HEAD
	//We set the variable to this value
	public function getCartID($login_id)
	{
		$stmt = self::$_connection->prepare("SELECT purchase_id FROM purchase WHERE login_id = :login_id AND status = 0");
		$stmt->execute(['login_id'=>$login_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Purchase');
		$this->purchase_id = $stmt->fetch()->purchase_id;
	}

=======
	public function getOrders($user_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM purchase WHERE user_id = :user_id AND status > 0 ");
		$stmt->execute(['user_id'=>$user_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Purchase');
		return $stmt->fetchAll();	
	}

	//We set the variable to this value
	public function getCartID($user_id)
	{
		$stmt = self::$_connection->prepare("SELECT purchase_id FROM purchase WHERE user_id = :user_id AND status = 0");
		$stmt->execute(['user_id'=>$user_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Purchase');
		$this->purchase_id = $stmt->fetch()->purchase_id;
	}
>>>>>>> 8ac1a8ca910f132f053dd1e3e33d538143a8f238
}