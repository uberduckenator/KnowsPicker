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
		$stmt = self::$_connection->prepare("INSERT INTO ram (part_no, speed, modules, item_id) VALUES (:part_no, :speed, :modules, :item_id)");
		$stmt->execute(['part_no'=>$this->part_no, 'speed'=>$this->speed, 'modules'=>$this->modules, 'item_id'=>$this->item_id]);
	}

	public function get($ram_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM ram_id WHERE ram_id = :ram_id");
		$stmt->execute(['ram_id'=>$ram_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'RAM');
		return $stmt->fetch();
	}

	public function delete($item_id)
	{
		$stmt = self::$_connection->prepare("DELETE FROM ram WHERE item_id = :item_id");
		$stmt->execute(['item_id'=>$item_id]);
	}

	public function update($item_id)
	{
		$stmt = self::$_connection->prepare("UPDATE ram SET part_no = :part_no, speed = :speed, modules = :modules
			WHERE item_id = :item_id");
		$stmt->execute(['part_no'=>$this->part_no, 'speed'=>$this->speed, 'modules'=>$this->modules, 'item_id'=>$this->item_id]);
	}
}