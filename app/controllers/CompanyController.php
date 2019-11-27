<?php
class CompanyController extends Controller{
	public function index(){
		$company = $this->model('CompanyProfile');
		$login_id = $_SESSION['login_id'];
		$company->getCompany($login_id);
		$this->view("Company/index", $company);
	}

	public function create(){
		if(!isset($_POST["action"])){
			$this->view("Company/create");
		}
		else{
			$company = $this->model("CompanyProfile");

			$company->company_name = $_POST['company_name'];
			$company->login_id = $_SESSION['login_id'];

			$company->insert();
			header("location:/Home");
		}
	}

	public function inventory()
	{
		$inventory =$this->model("Items");
		$company = $this->model("CompanyProfile")->getCompany($_SESSION['login_id']);
		$company_id = $company->company_id;
		$companyItems = $inventory->getItemsFromCompany($company_id);

		$this->view("Company/inventory", $companyItems);
	}


	public function addItems(){
		if(!isset($_POST["action"])){
			$itemtype = $this->model("ItemType")->getAll();
			$this->view("Company/additem", $itemtype);
		}
		else{
			$inventory = $this->model("Items");
			$company_id = $this->model("CompanyProfile")->getCompany($_SESSION['login_id'])->company_id;

			$inventory->item_name = $_POST['item_name'];
			$inventory->price = $_POST['price'];
			$item_type = $_POST['item_type'];
			$inventory->item_type = $item_type;
			$inventory->rating = $_POST['rating'];
			$inventory->ratings_amount = $_POST['ratings_amount'];
			$inventory->stock = $_POST['stock'];
			$inventory->rebate = $_POST['rebate'];
			$inventory->max_sale_quantity = $_POST['max_sale_quantity'];
			$inventory->company_id = $company_id;

			$inventory->insert();

			switch($item_type){
				case "CPU":
					header("location:/Items/CPU");
					break;
				case "CPU Cooler":
					header("location:/Items/CPUCooler");
					break;
				case "GPU":
					header("location:/Items/GPU");
					break;
				case "Motherboard":
					header("location:/Items/Motherboard");
					break;
				case "PC Case":
					header("location:/Items/PCCase");
					break;
				case "PSU":
					header("location:/Items/PSU");
					break;
				case "RAM":
					header("location:/Items/RAM");
					break;
				case "Storage":
					header("location:/Items/Storage");
					break;
				default:
					header("location:/Company/inventory");
			}
		}
	}
}