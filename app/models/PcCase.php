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
		$stmt = self::$_connection->prepare("INSERT INTO pc_case (type, power_supply, mb_form_factor, max_gpu_length, internal_2_5_bays, internal_3_5_bays, item_id) VALUES (:type, :power_supply, :mb_form_factor, :max_gpu_length, :internal_2_5_bays, :internal_3_5_bays, :item_id)");
		$stmt->execute(['type'=>$this->type, 'power_supply'=>$this->power_supply, 'mb_form_factor'=>$this->mb_form_factor, 'max_gpu_length'=>$this->max_gpu_length, 'internal_2_5_bays'=>$this->internal_2_5_bays, 'internal_3_5_bays'=>$this->internal_3_5_bays, 'item_id'=>$this->item_id]);

	}

	public function get($case_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM pc_case WHERE case_id = :case_id");
		$stmt->execute(['case_id'=>$case_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'PcCase');
		return $stmt->fetch();
	}

	public function getItem($item_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM pc_case WHERE item_id = :item_id");
		$stmt->execute(['item_id'=>$item_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'PcCase');
		return $stmt->fetch();
	}

	public function delete($item_id)
	{
		$stmt = self::$_connection->prepare("DELETE FROM pc_case WHERE item_id = :item_id");
		$stmt->execute(['item_id'=>$item_id]);
	}

	public function update($item_id)
	{
		$stmt = self::$_connection->prepare("UPDATE pc_case SET type = :type, power_supply = :power_supply, mb_form_factor = :mb_form_factor, max_gpu_length = :max_gpu_length, internal_2\.5_bays = internal_2_5_bays, internal_3\.5_bays = :internal_3_5_bays
			WHERE item_id = :item_id");
		$stmt->execute(['type'=>$this->type, 'power_supply'=>$this->power_supply, 'mb_form_factor'=>$this->mb_form_factor, 'max_gpu_length'=>$this->max_gpu_length, 'internal_2_5_bays'=>$this->internal_2_5_bays, 'internal_3_5_bays'=>$this->internal_3_5_bays, 'item_id'=>$item_id]);
	}
}