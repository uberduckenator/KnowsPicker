<?php

class Purchase extends Model
{
	public $purchase_id;//maybe for future use

	//Use these
	public $status = 0;
	public $subtotal;
	public $total;
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
		$stmt = self::$_connection->prepare("INSERT INTO purchase (purchase_id, status, subtotal, total, user_id, purchased_on, payment_confirm, shipping_id) VALUES (:purchase_id, :status, :subtotal, :total, :user_id, :purchased_on, :payment_confirm, :shipping_id)");
		$stmt->execute(['purchase_id'=>$this->purchase_id, 'status'=>$this->status, 'subtotal'=>$this->subtotal, 'total'=>$this->total, 'user_id'=>$this->user_id, 'purchased_on'=>$this->purchased_on, 'payment_confirm'=>$this->payment_confirm, 'shipping_id'=>$this->shipping_id]);
		$this->purchase_id = self::$_connection->lastInsertId();
	}

	/*public function getSubtotal()
	{
		$stmt = self::$_connection->prepare("SELECT subtotal FROM purchase WHERE purchase_id = :purchase_id");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Purchase');
		return $stmt->fetch();
	}*/

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

	public function updateSubtotal()
	{
		$stmt = self::$_connection->prepare("UPDATE purchase SET subtotal = :subtotal WHERE purchase_id = :purchase_id");
		$stmt->execute(['subtotal'=>$this->subtotal, 'purchase_id'=>$this->purchase_id]);
	}

	public function updateStatus()
	{
		$stmt = self::$_conneciton->prepare("UPDATE purchase SET status = :status WHERE purchase_id = :purchase_id");
		$stmt->execute(['status'=>$this->status, 'purchase_id'=>$this->purchase_id]);
	}

	public function updateShipping()
	{
		$stmt = self::$_conneciton->prepare("UPDATE purchase SET shipping_id = :shipping_id WHERE purchase_id = :purchase_id");
		$stmt->execute(['shipping_id'=>$this->shipping_id, 'purchase_id'=>$this->purchase_id]);
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

	public function getOrders($user_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM purchase WHERE user_id = :user_id AND status > 0 ");
		$stmt->execute(['user_id'=>$user_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Purchase');
		return $stmt->fetchAll();	
	}
}