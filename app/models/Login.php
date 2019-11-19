<?php

class Login extends Model{
	public $username;
	public $password_hash;
<<<<<<< HEAD
	public $rolel;
=======
	public $role;
>>>>>>> 34a8324aa86dbec7d71254d496cae50e46716eec

	public function __construct(){
		parent::__construct();
	}

	public function find($login_id){
		$stmt = self::$_connection->prepare("SELECT * FROM Login WHERE login_id = :login_id");
		$stmt->execute(['login_id'=>$login_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Login');
		return $stmt->fetch();
	}

	public function insert(){
		$stmt = self::$_connection->prepare("INSERT INTO Login(username, password_hash) VALUES (:username, :password_hash");
		$stmt->execute(['username'=>$this->username, 'password_hash'=>$this->password_hash]);
	}
}

?>