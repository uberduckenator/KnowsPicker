<?php

class CPU extends Model
{
	public $cpu_id; //Probably for admin

	//Use these
	public $model;
	public $socket;
	public $cores;
	public $clock_speed;
	public $wattage;
	public $series;
	public $integrated_graphics;
	public $cpu_cooler;
	public $item_id;

	public function __construct()
	{
		parent::__construct();
	}

	public function insert()
	{
		$stmt = self::$_connection->prepare("INSERT INTO cpu (model, socket, cores, clock_speed, wattage, series, integrated_graphics, cpu_cooler, item_id) VALUES (:model, :socket, :cores, :clock_speed, :wattage, :series, :integrated_graphics, :cpu_cooler, :item_id)");
		$stmt->execute(['model'=>$this->model, 'socket'=>$this->socket, 'cores'=>$this->cores, 'clock_speed'=>$this->clock_speed, 'wattage'=>$this->wattage, 'series'=>$this->series, 'integrated_graphics'=>$this->integrated_graphics, 'cpu_cooler'=>$this->cpu_cooler, 'item_id'=>$this->item_id]);
	}

	public function get($cpu_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM cpu WHERE cpu_id = :cpu_id");
		$stmt->execute(['cpu_id'=>$cpu_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Cpu');
		return $stmt->fetch();
	}

	public function getItem($item_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM cpu WHERE item_id = :item_id");
		$stmt->execute(['item_id'=>$item_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'CPU');
		return $stmt->fetch();
	}

	public function delete($item_id)
	{
		$stmt = self::$_connection->prepare("DELETE FROM cpu WHERE item_id = :item_id");
		$stmt->execute(['item_id'=>$item_id]);
	}

	public function update($item_id)
	{
		$stmt = self::$_connection->prepare("UPDATE cpu SET model = :model, socket = :socket, cores = :cores, clock_speed = :clock_speed, wattage = :wattage, series = :series, integrated_graphics = :integrated_graphics, cpu_cooler = :cpu_cooler
			WHERE item_id = :item_id");
		$stmt->execute(['model'=>$this->model, 'socket'=>$this->socket, 'cores'=>$this->cores, 'clock_speed'=>$this->clock_speed, 'wattage'=>$this->wattage, 'series'=>$this->series, 'integrated_graphics'=>$this->integrated_graphics, 'cpu_cooler'=>$this->cpu_cooler, 'item_id'=>$this->item_id]);
	}
}