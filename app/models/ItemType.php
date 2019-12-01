<?php
class ItemType extends Model{

	public $name;

	public function __construct(){
		parent::__construct();
	}

	public function getAll(){
		$stmt = self::$_connection->prepare("SELECT * FROM item_type");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'ItemType');
		return $stmt->fetchAll();
	}

	public function getName($item_type_id)
	{
		$stmt = self::$_connection->prepare("SELECT item_name FROM item_type
											 WHERE item_type_id = :item_type_id");
		$stmt->execute(['item_type_id']);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'ItemType');
		return $stmt->fetch();
	}
}