<?php

class Login extends Model{
	public $username;
	public $password_hash;
	public $role = "user";

	public function __construct(){
		parent::__construct();
	}

	public function find($username){
		$stmt = self::$_connection->prepare("SELECT * FROM Login WHERE username = :username");
		$stmt->execute(['username'=>$username]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Login');
		return $stmt->fetch();
	}

	public function insert(){
		$stmt = self::$_connection->prepare("INSERT INTO Login(username, password_hash, role) VALUES (:username, :password_hash, :role)");
		$stmt->execute(['username'=>$this->username, 'password_hash'=>$this->password_hash, 'role'=>$this->role]);

		return self::$_connection->lastInsertId();
	}
}

?>