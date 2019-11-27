<?php

class ItemsController extends Controller
{
	public function index(){
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
	}

	public function edit($item_id)
	{
		$Items = 
		if (!isset($_POST["action"]))
		{
			$this->view("Item/edit");
		}
	}

	public function details($item_id)
	{

	}

	public function delete($item_id)
	{

	}	
}