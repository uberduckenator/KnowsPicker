<?php

class Storage extends Model
{
	public $storage_id; //Probably for admin

	//Use these
	public $part_no;
	public $capacity;
	public $type;
	public $cache;
	public $form_factor;
	public $interface;
	public $nvme;
	public $item_id;

	public function __construct()
	{
		parent::__construct();
	}

	public function insert()
	{

	}

	public function get($storage_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM storage WHERE storage_id = :storage_id");
		$stmt->execute(['storage_id'=>$storage_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Storage');
		return $stmt->fetch();
	}

	public function delete($item_id)
	{
		$stmt = self::$_connection->prepare("DELETE FROM storage WHERE item_id = :item_id");
		$stmt->execute(['item_id'=>$item_id]);
	}

	public function update($item_id)
	{
		$stmt = self::$_connection->prepare("UPDATE storage SET part_no = :part_no, capacity = :capacity, type = :type, cache = :cache, form_factor = :form_factor, interface = :interface, nvme = :nvme
			 WHERE item_id = :item_id");
		$stmt->execute(['part_no'=>$this->part_no, 'capacity'=>$this->capacity, 'type'=>$this->type, 'cache'=>$this->cache, 'form_factor'=>$this->form_factor, 'interface'=>$this->interface, 'nvme'=>$this->nvme, 'item_id'=>$this->item_id]);
	}
}