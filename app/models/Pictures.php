<?php
class Pictures extends Model{

	public $picture_id;
	public $filepath;

	public function __construct(){
		parent::__construct();
	}

	public function insert(){
		$stmt = self::$_connection->prepare("INSERT INTO pictures (filepath) VALUES (:filepath)");
		$stmt->execute(['filepath'=>$this->filepath]);
		$this->picture_id = self::$_connection->lastInsertId();
	}


}