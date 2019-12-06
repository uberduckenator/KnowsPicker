<?php

class AdminProfile extends Model
{
	public $admin_id;//Maybe for admin

	public $first_name;
	public $last_name;
	public $login_id;

	public function __construct()
	{
		parent::__construct();
	}

	public function insert()
	{
		$stmt = self::$_connection->prepare("INSERT INTO admin_profile (first_name, last_name, login_id) VALUES (:first_name, :last_name, :login_id)");
		$stmt->execute(['first_name'=>$this->first_name, 'last_name'=>$this->last_name, 'login_id'=>$this->login_id]);
		$this->admin_id = self::$_connection->lastInsertId();
	}

	//Edits only the user's info
	public function edit($admin_id)
	{
		$stmt = self::$_connection->prepare("UPDATE admin_profile SET first_name = :first_name, last_name = :last_name WHERE admin_id = :admin_id");
		$stmt->execute(['first_name'=>$this->first_name, 'last_name'=>$this->last_name, 'admin_id'=>$admin_id]);
	}

	public function delete($admin_id)
	{
		$stmt = self::$_connection->prepare("DELETE FROM admin_profile WHERE admin_id = :admin_id");
		$stmt->execute(['admin_id'=>$admin_id]);
	}

	public function get($admin_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM admin_profile WHERE admin_id = :admin_id");
		$stmt->execute(['admin_id'=>$admin_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'AdminProfile');
		return $stmt->fetch();
	}

	//Gets the user's info based on their login_id (INCLUDES PAYMENT_ID FOR PAYMENT INFO)
	public function getAdmin($login_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM admin_profile WHERE login_id = :login_id");
		$stmt->execute(['login_id'=>$login_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'AdminProfile');
		return $stmt->fetch();
	}
}