<?php
class Countries extends Model{
	public function __construct(){
		parent::__construct();
	}

	public function getCountries(){
		$stmt = self::$_connection->prepare("SELECT * FROM Countries");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Countries');
		return $stmt->fetchAll();
	}
}
?>