<?php
class CompanyProfile extends Model{
	public $company_id;
	public $company_name;
	public $picture_id;
	public $login_id;

	public function __construct(){
		parent::__construct();
	}

	public function insert(){
		$stmt = self::$_connection->prepare("INSERT INTO company_profile (company_name, picture_id, login_id) VALUES (:company_name, :picture_id, :login_id)");
		$stmt->execute(['company_name' =>$this->company_name, 'picture_id' =>$this->picture_id, 'login_id' =>$this->login_id]);
		$this->company_id = self::$_connection->getLastInsertId();
	}

	public function getCompany($login_id){
		$stmt = self::$_connection->prepare("SELECT * FROM company_profile WHERE login_id = :login_id");
		$stmt->execute(['login_id' =>$login_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'CompanyProfile');
		return $stmt->fetch();
	}

}