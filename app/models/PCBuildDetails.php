<?php

class PCBuildDetails extends Model
{
	public $pc_build_details_id; //Admin

	//Use these
	public $item_id;
	public $pc_build_id;

	public function __construct()
	{
		parent::__construct();
	}

	public function insert()
	{
		$stmt = self::$_connection->prepare("INSERT INTO pc_build_details (item_id, quantity, pc_build_id) VALUES (:item_id, :pc_build_id)");
		$stmt->execute(['item_id'=>$this->item_id, 'pc_build_id'=>$this->pc_build_id]);
	}

	public function get($pc_build_details_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM pc_build_details WHERE pc_build_details_id = :pc_build_details_id");
		$stmt->execute(['pc_build_details_id'=>$pc_build_details_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'PCBuildDetails');
		return $stmt->fetch();
	}

	public function getRam($pc_build_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM pc_build_details INNER JOIN items USING (item_id) WHERE pc_build_id = :pc_build_id AND item_type = 'RAM'");
		$stmt->execute(['pc_build_id'=>$pc_build_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'PCBuildDetails');
		return $stmt->fetch();
	}

	public function getAll($pc_build_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM pc_build_details INNER JOIN items USING (item_id) WHERE pc_build_id = :pc_build_id");
		$stmt->execute(['pc_build_id'=>$pc_build_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'PCBuildDetails');
		return $stmt->fetchAll();
	}

	public function delete($pc_build_details_id)
	{
		$stmt = self::$_connection->prepare("DELETE FROM pc_build_details WHERE pc_build_details_id = :pc_build_details_id");
		$stmt->execute(['pc_build_details_id'=>$pc_build_details_id]);
	}
}