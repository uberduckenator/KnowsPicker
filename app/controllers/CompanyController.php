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
			$picture = $this->model("Pictures");

			$picture->filepath = $_POST['company_picture'];
			$picture->insert();

			$company->company_name = $_POST['company_name'];
			$company->picture_id = $picture->picture_id;
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
			$picture = $this->model("Pictures");

			$picture->filepath = $_POST['item_image'];
			$picture->insert();

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
			$inventory->picture_id = $picture->picture_id;

			$inventory->insert();
			
			switch($item_type){
				case "CPU":
					header("location:/Items/CPU/$inventory->item_id");
					break;
				case "CPU Cooler":
					header("location:/Items/CPUCooler/$inventory->item_id");
					break;
				case "GPU":
					header("location:/Items/GPU/$inventory->item_id");
					break;
				case "Motherboard":
					header("location:/Items/Motherboard/$inventory->item_id");
					break;
				case "PC Case":
					header("location:/Items/PCCase/$inventory->item_id");
					break;
				case "PSU":
					header("location:/Items/PSU/$inventory->item_id");
					break;
				case "RAM":
					header("location:/Items/RAM/$inventory->item_id");
					break;
				case "Storage":
					header("location:/Items/Storage/$inventory->item_id");
					break;
				default:
					header("location:/Company/inventory");
			}
		}
	}
}