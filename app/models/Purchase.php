<?php

class Purchase extends Model
{
	public $purchase_id;
	public $status = 0;
	public $total;
	public $payment_id;
	public $login_id;
	public $purchased_on;
	public $payment_confirm;

	public function __construct()
	{
		parent::__construct();
	}

	public function insert()
	{
		$stmt = self::$_connection->prepare("INSERT INTO purchase (purchase_id, status, total, payment_id, login_id, payment_confirm) VALUES (:purchase_id, :status, :total, :payment_id, :login_id, :payment_confirm)");
		$stmt->execute(['purchase_id'=>$this->purchase_id, 'status'=>$this->status,'total'=>$this->total, 'payment_id'=>$this->payment_id, 'login_id'=>$this->login_id, 'payment_confirm'=>$this->payment_confirm]);
	}

	public function delete($purchase_id)
	{
		$stmt = self::$_connection->prepare("DELETE FROM purchase WHERE purchase_id = :purchase_id");
		$stmt->execute(['purchase_id'=>$purchase_id]);
	}

	//Maybe used for admins or something
	public function getAll()
	{
		$stmt = self::$_connection->prepare("SELECT * FROM purchase");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Purchase');
		return $stmt->fetch();
	}

	//Get user's cart
	public function get($login_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM purchase WHERE login_id = :login_id");
		$stmt->execute(['login_id'=>$login_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Purchase');
		return $stmt->fetch();
	}


}