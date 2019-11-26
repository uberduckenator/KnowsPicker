<?php

class PSU extends Model
{
	public $psu_id; //Probably for admin

	//Use these
	public $model;
	public $form_factor;
	public $efficiency_rating;
	public $wattage;
	public $modular;
	public $fanless;
	public $item_id;

	public function __construct()
	{
		parent::__construct();
	}

	public function insert()
	{

	}

	public function get($psu_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM psu WHERE psu_id = :psu_id");
		$stmt->execute(['psu_id'=>$psu_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'PSU');
		return $stmt->fetch();
	}
}