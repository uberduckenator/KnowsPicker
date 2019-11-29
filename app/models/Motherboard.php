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
		$stmt = self::$_connection->prepare("INSERT INTO motherboard (model, socket, form_factor, ram_slots, max_ram, ram_type, memory_speed, pci_e_slots, onboard_ethernet, sata_ports, m2_slots, wifi, item_id) VALUES (:model, :socket, :form_factor, :ram_slots, :max_ram, :ram_type, :memory_speed, :pci_e_slots, :onboard_ethernet, :sata_ports, :m2_slots, :wifi, :item_id)");
		$stmt->execute(['model'=>$this->model, 'socket'=>$this->socket, 'form_factor'=>$this->form_factor, 'ram_slots'=>$this->ram_slots, 'max_ram'=>$this->max_ram, 'ram_type'=>$this->ram_type, 'memory_speed'=>$this->memory_speed, 'pci_e_slots'=>$this->pci_e_slots, 'onboard_ethernet'=>$this->onboard_ethernet, 'sata_ports'=>$this->sata_ports, 'm2_slots'=>$this->m2_slots, 'wifi'=>$this->wifi, 'item_id'=>$this->item_id]);
	}

	public function get($motherboard_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM motherboard WHERE motherboard_id = :motherboard_id");
		$stmt->execute(['motherboard_id'=>$motherboard_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Motherboard');
		return $stmt->fetch();
	}

	public function delete($item_id)
	{
		$stmt = self::$_connection->prepare("DELETE FROM motherboard WHERE item_id = :item_id");
		$stmt->execute(['item_id'=>$item_id]);
	}

	public function update($item_id)
	{
		$stmt = self::$_connection->prepare("UPDATE motherboard SET socket = :socket, form_factor = :form_factor, ram_slots = :ram_slots, max_ram = :max_ram, ram_type = :ram_type, memory_speed = :memory_speed, pci_e_slots = :pci_e_slots, onboard_ethernet = :onboard_ethernet, sata_ports = :sata_ports, m2_slots = :m2_slots, wifi = :wifi
			WHERE item_id = :item_id");
		$stmt->execute(['socket'=>$this->socket, 'form_factor'=>$this->form_factor, 'ram_slots'=>$this->ram_slots, 'max_ram'=>$this->max_ram, 'ram_type'=>$this->ram_type, 'memory_speed'=>$this->memory_speed, 'pci_e_slots'=>$this->pci_e_slots, 'onboard_ethernet'=>$this->onboard_ethernet, 'sata_ports'=>$this->sata_ports, 'm2_slots'=>$this->m2_slots, 'wifi'=>$this->wifi, 'item_id'=>$this->item_id]);
	}
}