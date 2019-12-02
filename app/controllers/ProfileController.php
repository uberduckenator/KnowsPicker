<?php
class ProfileController extends Controller{
	public function index(){
			$profile = $this->model('UserProfile');
			$login_id = $_SESSION['login_id'];
			$profile->getUser($login_id);
			$this->view("Profile/index", $profile);
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
			$profile->city = $_POST["city"];
			$profile->street_address = $_POST["street_address"];
			$profile->postal_code = $_POST["postal_code"];
			$profile->login_id = $_SESSION['login_id'];
			$profile->country_id = $_POST['countries'];

			$profile->insert();

			header("location:/Home");

		}
	}
}
?>