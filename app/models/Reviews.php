<?php

class Reviews extends Model
{
	public $review_id; //Probably for admin

	//Use these
	public $title;
	public $messsage;
	public $created_on;
	public $item_id;
	public $user_id;

	public function __construct()
	{
		parent::__construct();
	}

	public function insert()
	{
		$stmt = self::$_connection->prepare("INSERT INTO reviews (title, message, created_on, item_id, user_id) VALUES (:title, :message, :created_on, :item_id, :user_id)");
		$stmt->execute(['title'=>$this->title, 'message'=>$this->message, 'created_on'=>$this->created_on, 'item_id'=>$this->item_id, 'user_id'=>$this->user_id]);
	}

	public function getOf($item_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM reviews r
											 JOIN user_profile u ON r.user_id = u.user_id  WHERE item_id = :item_id");
		$stmt->execute(['item_id' =>$item_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Reviews');
		return $stmt->fetchAll();
	}

	public function getItemUser($item_id, $user_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM reviews WHERE item_id = :item_id AND user_id = :user_id");
		$stmt->execute(['item_id' =>$item_id, 'user_id'=>$user_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Reviews');
		return $stmt->fetch();
	}
}