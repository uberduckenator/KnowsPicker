<?php

<<<<<<< HEAD
class PcCase extends Model
=======
class PCBuildDetails extends Model
>>>>>>> 8ac1a8ca910f132f053dd1e3e33d538143a8f238
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
		$stmt = self::$_connection->prepare("INSERT INTO pc_build_details (item_id, pc_build_id) VALUES (:item_id, :pc_build_id)");
	}

	public function get($pc_build_details_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM pc_build_details WHERE pc_build_details_id = :pc_build_details_id");
		$stmt->execute(['pc_build_details_id'=>$pc_build_details_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'PC_Build');
		return $stmt->fetch();
	}

	public function getAll($pc_build_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM pc_build_details WHERE pc_build_id = :pc_build_id");
		$stmt->execute(['pc_build_id'=>$pc_build_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'PC_Build');
		return $stmt->fetchAll();
	}

	public function delete($pc_build_details_id)
	{
		$stmt = self::$_connection->prepare("DELETE FROM pc_build_details WHERE pc_build_details_id = :pc_build_details_id");
		$stmt->execute(['pc_build_details_id'=>$pc_build_details_id]);
	}
}