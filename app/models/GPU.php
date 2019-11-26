<?php

class GPU extends Model
{
	public $gpu_id; //Probably for admin

	//Use these
	public $part_no;
	public $chipset;
	public $memory;
	public $memory_type;
	public $core_clock;
	public $interface;
	public $length;
	public $wattage;
	public $item_id;

	public function __construct()
	{
		parent::__construct();
	}

	public function insert()
	{

	}

	public function get($gpu_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM gpu WHERE gpu_id = :gpu_id");
		$stmt->execute(['gpu_id'=>$gpu_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Gpu');
		return $stmt->fetch();
	}
}