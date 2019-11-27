<?php

class ItemsController extends Controller
{
	public function index(){
<<<<<<< HEAD
		
	}

	public function CPU(){
		if(!isset($_POST["action"])){
			$this->view("Item/CPU");
		}
		else{
			$CPU = $this->model("CPU");

		$CPU->model = $_POST['model'];
		$CPU->socket = $_POST['socket'];
		$CPU->cores = $_POST['cores'];
		$CPU->clock_speed = $_POST['clock_speed'];
		$CPU->wattage = $_POST['wattage'];
		$CPU->series = $_POST['series'];
		$CPU->integrated_graphics = $_POST['integrated_graphics'];
		$CPU->cpu_cooler = $_POST['cpu_cooler'];

		$CPU->insert();
		header("location:/Company/inventory");
		}
=======
<<<<<<< HEAD
		
=======
		$inventory =$this->model("Items");
		$company_id = $this->model("CompanyProfile")->getCompany($_SESSION['login_id'])->company_id;
		$companyItems = $inventory->getItemsFromCompany($company_id);
		$this->view("Company/inventory");
	}

	public function addItems(){
		if(!isset($_POST["action"])){
			$this->view("Company/additem");
		}
		else{
			$inventory = $this->model("Items");

			$inventory->item_name = $_POST('item_name');
			$inventory->price = $_POST('price');
			$inventory->item_type = $_POST('item_type');
			$inventory->rating = $_POST('rating');
			$inventory->ratings_amount = $_POST('ratings_amount');
			$inventory->stock = $_POST('stock');
			$inventory->rebate = $_POST('rebate');
			$inventory->max_sale_quantity = $_POST('max_sale_quantity');
			$inventory->company_id = $_SESSION('company_id');

			$inventory->insert();
			header("location:/inventory");
		}
>>>>>>> 29d05a6e19786642e4ecc252560031a32709ced6
>>>>>>> f3a238c08b405876824d53d5db1b2006baad0264
	}

	
}