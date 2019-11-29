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
		$stmt = self::$_connection->prepare("INSERT INTO psu (model, form_factor, efficiency_rating, wattage, modular, fanless, item_id) VALUES (:model, :form_factor, :efficiency_rating, :wattage, :modular, :fanless, :item_id)");
		$stmt->execute(['model'=>$this->model, 'form_factor'=>$this->form_factor, 'efficiency_rating'=>$this->efficiency_rating, 'wattage'=>$this->wattage, 'modular'=>$this->modular, 'fanless'=>$this->fanless, 'item_id'=>$this->item_id]);
	}

	public function get($psu_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM psu WHERE psu_id = :psu_id");
		$stmt->execute(['psu_id'=>$psu_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'PSU');
		return $stmt->fetch();
	}
}