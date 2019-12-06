<?php

class PurchaseDetails extends Model
{
	public $purchase_details_id;//Maybe for later use

	//Use these
	public $item_id;
	public $purchase_id;
	public $quantity = 1;

	public function __construct()
	{
		parent::__construct();
	}

	public function insert()
	{
		$stmt = self::$_connection->prepare("INSERT INTO purchase_details (item_id, purchase_id, quantity) VALUES (:item_id, :purchase_id, :quantity)");
		$stmt->execute(['item_id'=>$this->item_id, 'purchase_id'=>$this->purchase_id, 'quantity'=>$this->quantity]);
		$this->purchase_details_id = self::$_connection->lastInsertId();
	}

	public function delete($purchase_details_id)
	{
		$stmt = self::$_connection->prepare("DELETE FROM purchase_details WHERE purchase_details_id = :purchase_details_id");
		$stmt->execute(['purchase_details_id'=>$purchase_details_id]);
	}

	public function updateQuantity($purchase_details_id)
	{
		$stmt = self::$_connection->prepare("UPDATE purchase_details SET quantity = :quantity WHERE purchase_details_id = :purchase_details_id");
		$stmt->execute(['quantity'=>$this->quantity,'purchase_details_id'=>$purchase_details_id]);
	}

	public function updatePrice($purchase_details_id)
	{
		$stmt = self::$_connection->prepare("UPDATE purchase_details SET purchase_price = :purchase_price WHERE purchase_details_id = :purchase_details_id");
		$stmt->execute(['purchase_price'=>$this->purchase_price, 'purchase_details_id'=>$this->purchase_details_id]);
	}

	//Might be useful for admin
	public function getAll()
	{
		$stmt = self::$_connection->prepare("SELECT * FROM purchase_details");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'PurchaseDetails');
		return $stmt->fetchAll();
	}

	//Get Cart details
	public function get($purchase_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM purchase_details p JOIN Items i ON i.item_id = p.item_id WHERE purchase_id = :purchase_id");
		$stmt->execute(['purchase_id'=>$purchase_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'PurchaseDetails');
		return $stmt->fetchAll();
	}

	public function getDetails($purchase_details_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM purchase_details p JOIN Items i ON i.item_id = p.item_id WHERE purchase_details_id = :purchase_details_id");
		$stmt->execute(['purchase_details_id'=>$purchase_details_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'PurchaseDetails');
		return $stmt->fetch();
	}

	public function getSelf()
	{
		$stmt = self::$_connection->prepare("SELECT * FROM purchase_details p JOIN Items i ON i.item_id = p.item_id WHERE purchase_details_id = :purchase_details_id");
		$stmt->execute(['purchase_details_id'=>$this->purchase_details_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'PurchaseDetails');
		return $stmt->fetch();
	}
}