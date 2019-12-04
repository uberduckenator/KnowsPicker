<?php

class Shipping extends Model
{
	public $shipping_id;
	public $shipping_type;
	public $shipping_cost;

	public function __construct()
	{
		parent::__construct();
	}

	public function getAll()
	{
		$stmt = self::$_connection->prepare("SELECT * FROM shipping");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Shipping');
		return $stmt->fetch();
	}

	public function get($shipping_id)
	{
		
	}
}