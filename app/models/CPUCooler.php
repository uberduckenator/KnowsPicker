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
		$stmt = self::$_connection->prepare("INSERT INTO cpu_cooler (model, sockets, fan_rpm, height, item_id) VALUES (:model, :sockets, :fan_rpm, :height, :item_id)");
		$stmt->execute(['model'=>$this->model, 'sockets'=>$this->sockets, 'fan_rpm'=>$this->fan_rpm, 'height'=>$this->height, 'item_id'=>$this->item_id]);
	}

	public function get($cpu_cooler_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM cpu WHERE cpu_cooler_id = :cpu_cooler_id");
		$stmt->execute(['cpu_cooler_id'=>$cpu_cooler_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'CpuCooler');
		return $stmt->fetch();
	}
}