<?php

class Favorite extends Model{
	public $favorite_id;
	public $item_id;
	public $user_id;

	public function __construct(){
		parent::__construct();
	}

	public function insert()
	{
		$stmt = self::$_connection->prepare("INSERT INTO favorite (item_id, user_id) VALUES (:item_id, :user_id)");
		$stmt->execute(['item_id'=>$this->item_id, 'user_id'=>$this->user_id]);	
	}

	public function getMy($user_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM favorite INNER JOIN items USING (item_id) WHERE $user_id = :user_id");
		$stmt->execute(['user_id'=>$user_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Favorite');
		return $stmt->fetchAll();	
	}

	public function delete()
	{
		$stmt = self::$_connection->prepare("DELETE FROM favorite WHERE item_id = :item_id");
		$stmt->execute(['item_id'=>$this->item_id]);
	}
}

?>