<?php

class RAM extends Model
{
	public $ram_id; //Probably for admin

	//Use these
	public $part_no;
	public $speed;
	public $modules;
	public $item_id;

	public function __construct()
	{
		parent::__construct();
	}

	public function insert()
	{

	}

	public function get($ram_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM ram_id WHERE ram_id = :ram_id");
		$stmt->execute(['ram_id'=>$ram_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'RAM');
		return $stmt->fetch();
	}
}