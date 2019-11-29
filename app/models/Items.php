<?php
class Items extends Model
{
	public $item_id; //Probably for admin

	//Use these
	public $item_name;
	public $price;
	public $item_type;
	public $rating;
	public $ratings_amount;
	public $stock;
	public $rebate;
	public $max_sale_quantity;
	public $company_id;
	public $picture_id;

	public function __construct()
	{
		parent::__construct();
	}

	public function insert(){
		$stmt = self::$_connection->prepare("INSERT INTO items (item_name, price, item_type, rating, ratings_amount, stock, rebate, max_sale_quantity, company_id)
											 VALUES (:item_name, :price, :item_type, :rating, :ratings_amount, :stock, :rebate, :max_sale_quantity, :company_id)");
		$stmt->execute(['item_name'=>$this->item_name, 'price'=>$this->price, 'item_type'=>$this->item_type, 'rating'=> $this->rating, 'ratings_amount'=>$this->ratings_amount, 'stock'=>$this->stock, 'rebate'=>$this->rebate, 'max_sale_quantity'=>$this->max_sale_quantity, 'company_id'=>$this->company_id]);
		$this->item_id = self::$_connection->lastInsertId();

	}

	public function get($item_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM items WHERE item_id = :item_id");
		$stmt->execute(['item_id'=>$item_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Items');
		return $stmt->fetch();
	}

	public function getItemsFromCompany($company_id){
		$stmt = self::$_connection->prepare("SELECT * FROM items WHERE company_id = :company_id");
		$stmt->execute(['company_id' =>$company_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Items');
		return $stmt->fetchAll();
	}

	public function getAll()
	{
		$stmt = self::$_connection->prepare("SELECT * FROM items");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Items');
		return $stmt->fetchAll();
	}


	//Get top
	public function getTop($table_name, $maximum)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM items 
											INNER JOIN :table_name USING item_id 
											ORDER BY rating DESC
											LIMIT :maximum");
		$stmt->execute(['table_name'=>$table_name,'maximum'=>$maximum]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Items');
		return $stmt->fetchAll();
	}

	

}