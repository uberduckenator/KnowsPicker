<?php

class CPUCooler extends Model
{
	public $cpu_cooler_id; //Probably for admin

	//Use these
	public $model;
	public $sockets;
	public $fan_rpm;
	public $height;
	public $item_id;

	public function __construct()
	{
		parent::__construct();
	}

	public function insert()
	{

	}

	public function get($cpu_cooler_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM cpu WHERE cpu_cooler_id = :cpu_cooler_id");
		$stmt->execute(['cpu_cooler_id'=>$cpu_cooler_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'CpuCooler');
		return $stmt->fetch();
	}
}