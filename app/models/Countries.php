<?php
class Countries extends Model{
	public $country_name;

	public function __construct(){
		parent::__construct();
	}

	public function getCountries(){
		$stmt = self::$_connection->prepare("SELECT * FROM Countries");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Countries');
		return $stmt->fetchAll();
	}

	public function getCountryId($country_name){
		$stmt = self::$_connection->prepare("SELECT country_id FROM Countries WHERE country_name = :country_name");
		$stmt->execute(['country_name' =>$country_name]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Countries');
		return $stmt->fetch();
	}
}
?>