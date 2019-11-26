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
}