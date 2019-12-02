<?php

<<<<<<< HEAD
class PcCase extends Model
=======
class PCBuild extends Model
>>>>>>> 8ac1a8ca910f132f053dd1e3e33d538143a8f238
{
	public $pc_build_id; //Admin

	//Use these
	public $name;
	public $description;
	public $user_id;


	public function __construct()
	{
		parent::__construct();
	}

	public function insert()
	{
<<<<<<< HEAD
		$stmt = self::$_connection->prepare("INSERT INTO pc_build (name, descrition, user_id) VALUES (:name, :descrition, :user_id)");
		$stmt->execute('name'=>$this->name, 'descrition'=>$this->descrition, 'user_id'=>$this->user_id);
=======
		$stmt = self::$_connection->prepare("INSERT INTO pc_build (name, description, user_id) VALUES (:name, :description, :user_id)");
		$stmt->execute(['name'=>$this->name, 'description'=>$this->description, 'user_id'=>$this->user_id]);
>>>>>>> 8ac1a8ca910f132f053dd1e3e33d538143a8f238
		$this->pc_build_id = self::$_connection->lastInsertId();
	}

	public function get($pc_build_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM pc_build WHERE pc_build_id = :pc_build_id");
		$stmt->execute(['pc_build_id'=>$pc_build_id]);
<<<<<<< HEAD
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'PC_Build');
=======
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'PCBuild');
>>>>>>> 8ac1a8ca910f132f053dd1e3e33d538143a8f238
		return $stmt->fetch();
	}

	public function getAll()
	{
		$stmt = self::$_connection->prepare("SELECT * FROM pc_build");
		$stmt->execute();
<<<<<<< HEAD
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'PC_Build');
=======
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'PCBuild');
>>>>>>> 8ac1a8ca910f132f053dd1e3e33d538143a8f238
		return $stmt->fetchAll();
	}

	public function getAllUser($user_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM pc_build WHERE user_id = :user_id");
		$stmt->execute(['user_id'=>$user_id]);
<<<<<<< HEAD
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'PC_Build');
=======
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'PCBuild');
>>>>>>> 8ac1a8ca910f132f053dd1e3e33d538143a8f238
		return $stmt->fetchAll();
	}

	public function delete($pc_build_id)
	{
		$stmt = self::$_connection->prepare("DELETE FROM pc_build WHERE pc_build_id = :pc_build_id");
		$stmt->execute(['pc_build_id'=>$pc_build_id]);
	}

	public function update($pc_build_id)
	{
		$stmt = self::$_connection->prepare("UPDATE pc_build SET name = :name, descrition = :descrition, user_id = :user_id
			WHERE pc_build_id = :pc_build_id");
		$stmt->execute(['name'=>$this->name, 'description'=>$this->descrition, 'user_id'=>$this->user_id, 'pc_build_id'=>$pc_build_id]);
	}
}