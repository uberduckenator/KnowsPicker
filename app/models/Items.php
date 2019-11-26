<?
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

	public function get($item_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM items WHERE item_id = :item_id");
		$stmt->execute(['item_id'=>$item_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Items');
		return $stmt->fetch();
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