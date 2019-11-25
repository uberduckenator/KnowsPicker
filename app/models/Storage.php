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
}