<?php

class PcCase extends Model
{
	public $case_id; //Probably for admin

	//Use these
	public $type;
	public $power_supply;
	public $mb_form_factor;
	public $max_gpu_length;
	public $internal_2_5_bays;
	public $internal_3_5_bays;
	public $item_id;

	public function __construct()
	{
		parent::__construct();
	}

	public function insert()
	{

	}

	public function get($case_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM pc_case WHERE case_id = :case_id");
		$stmt->execute(['case_id'=>$case_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'PcCase');
		return $stmt->fetch();
	}
}