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
		$stmt = self::$_connection->prepare("SELECT * FROM cpu_cooler WHERE cpu_cooler_id = :cpu_cooler_id");
		$stmt->execute(['cpu_cooler_id'=>$cpu_cooler_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'CpuCooler');
		return $stmt->fetch();
	}

	public function getItem($item_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM cpu_cooler WHERE item_id = :item_id");
		$stmt->execute(['item_id'=>$item_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'CpuCooler');
		return $stmt->fetch();
	}

	public function delete($item_id)
	{
		$stmt = self::$_connection->prepare("DELETE FROM cpu_cooler WHERE item_id = :item_id");
		$stmt->execute(['item_id'=>$item_id]);
	}

	public function update($item_id)
	{
		$stmt = self::$_connection->prepare("UPDATE cpu_cooler SET model = :model, sockets = :sockets, fan_rpm = :fan_rpm, height = :height
			WHERE item_id = :item_id");
		$stmt->execute(['model'=>$this->model, 'sockets'=>$this->sockets, 'fan_rpm'=>$this->fan_rpm, 'height'=>$this->height, 'item_id'=>$this->item_id]);
	}
}