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
					$this->view("/Item/CPU");
					break;
				case "CPU Cooler":
					$this->view("/Item/CPUCooler");
					break;
				case "GPU":
					$this->view("/Item/GPU");
					break;
				case "Motherboard":
					$this->view("/Item/Motherboard");
					break;
				case "PC Case":
					$this->view("/Item/PCCase");
					break;
				case "PSU":
					$this->view("/Item/PSU");
					break;
				case "RAM":
					$this->view("/Item/RAM");
					break;
				case "Storage":
					$this->view("/Item/Storage");
					break;
				default:
					header("location:/Company/inventory");
			}
		}
	}
}