<?php

class Motherboard extends Model
{
	public $motherboard_id; //Probably for admin

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
		$stmt = self::$_connection->prepare("INSERT INTO gpu (part_no, chipset, memory, memory_type, core_clock, interface, length, wattage, item_id) VALUES (:part_no, :chipset, :memory, :memory_type, :core_clock, :interface, :length, :wattage, :item_id)");
		$stmt->execute(['part_no'=>$this->part_no, 'chipset'=>$this->chipset, 'memory'=>$this->memory, 'memory_type'=>$this->memory_type, 'core_clock'=>$this->core_clock, 'interface'=>$this->interface, 'length'=>$this->length, 'wattage'=>$this->wattage, 'item_id'=>$this->item_id]);
	}

	public function get($gpu_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM gpu WHERE gpu_id = :gpu_id");
		$stmt->execute(['gpu_id'=>$gpu_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Gpu');
		return $stmt->fetch();
	}

	public function getItem($item_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM gpu WHERE item_id = :item_id");
		$stmt->execute(['item_id'=>$item_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Gpu');
		return $stmt->fetch();
	}

	public function delete($item_id)
	{
		$stmt = self::$_connection->prepare("DELETE FROM gpu WHERE item_id = :item_id");
		$stmt->execute(['item_id'=>$item_id]);
	}

	public function update($item_id)
	{
		$stmt = self::$_connection->prepare("UPDATE gpu SET part_no = :part_no, chipset = :chipset, memory = :memory, memory_type = :memory_type, core_clock = :core_clock, interface = :interface, length = :length, wattage = :wattage
			WHERE item_id = :item_id");
		$stmt->execute(['part_no'=>$this->part_no, 'chipset'=>$this->chipset, 'memory'=>$this->memory, 'memory_type'=>$this->memory_type, 'core_clock'=>$this->core_clock, 'interface'=>$this->interface, 'length'=>$this->length, 'wattage'=>$this->wattage, 'item_id'=>$this->item_id]);
	}
}