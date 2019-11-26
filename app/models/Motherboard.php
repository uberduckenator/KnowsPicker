<?php

class Motherboard extends Model
{
	public $motherboard_id; //Probably for admin

	//Use these
	public $model;
	public $socket;
	public $form_factor;
	public $ram_slots;
	public $max_ram;
	public $ram_type;
	public $memory_speed;
	public $pci_e_slots;
	public $onboard_ethernet;
	public $sata_ports;
	public $m2_slots;
	public $wifi;
	public $item_id;

	public function __construct()
	{
		parent::__construct();
	}

	public function insert()
	{

	}

	public function get($motherboard_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM motherboard WHERE motherboard_id = :motherboard_id");
		$stmt->execute(['motherboard_id'=>$motherboard_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Motherboard');
		return $stmt->fetch();
	}
}