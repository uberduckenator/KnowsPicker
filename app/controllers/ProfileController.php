<?php
class ProfileController extends Controller{
	public function index(){
		if(!isset($_POST["action"])){
			$this->view("Profile/index");
		}
		else{

		}
	}

	public function create(){
		if(!isset($_POST["action"])){
			$countries = $this->model("Countries")->getCountries();
			$this->view("Profile/create", $countries);
		}
		else{
			$profile = $this->model('UserProfile');
			
			$profile->first_name = $_POST["first_name"];
			$profile->last_name = $_POST["last_name"];
			$profile->email = $_POST["email"];
			$profile->country = $_POST["countries"];
			$profile->city = $_POST["city"];
			$profile->street_address = $_POST["street_address"];
			$profile->postal_code = $_POST["postal_code"];
			$profile->login_id = $_SESSION['login_id'];

			$profile->insert();

			header("location:/Home");

		}
	}
}
?>