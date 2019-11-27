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
}