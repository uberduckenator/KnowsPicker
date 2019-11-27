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
<<<<<<< HEAD
		$stmt = self::$_connection->prepare("INSERT INTO items (item_name, price, item_type, rating, ratings_amount, stock, rebate, max_sale_quantity, company_id)
											 VALUES (:item_name, :price, :item_type, :rating, :ratings_amount, :stock, :rebate, :max_sale_quantity, :company_id)");
		$stmt->execute(['item_name'=>$this->item_name, 'price'=>$this->price, 'item_type'=>$this->item_type, 'rating'=> $this->rating, 'ratings_amount'=>$this->ratings_amount, 'stock'=>$this->stock, 'rebate'=>$this->rebate, 'max_sale_quantity'=>$this->max_sale_quantity, 'company_id'=>$this->company_id]);
=======
		$stmt = self:$_connection->prepare("INSERT INTO items (item_name, price, item_type, rating, ratings_amount, stock, rebate, max_sale_quantity, company_id) VALUES (:item_name, :price, :item_type, :rating, :ratings_amount, :stock, :rebate, :max_sale_quantity, :company_id");
		$stmt->execute(['item_name' =>$this->item_name, 'price' =>$this->price, 'item_type' =>$this->item_type 'rating' => $this->rating, 'ratings_amount' =>$this->ratings_amount, 'stock' =>$this->stock, 'rebate' =>$this->rebate, 'max_sale_quantity' =>$this->max_sale_quantity, 'company_id' =$this->company_id]);
>>>>>>> 29d05a6e19786642e4ecc252560031a32709ced6
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

	public function search($searchText)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM items WHERE item_name LIKE :searchText");
		$stmt->execute(['searchText'=>$searchText]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Items');
		return $stmt->fetchAll();
	}


	//Get top
	public function getTop($item_type)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM items 
											WHERE item_type = :item_type 
											ORDER BY rating DESC
											LIMIT 5");
		$stmt->execute(['item_type'=>$item_type]);//'maximum'=>$maximum]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Items');
		return $stmt->fetchAll();
	}

	

}