<?php

class Shipping extends model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get($shipping_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM shipping");
	}
}