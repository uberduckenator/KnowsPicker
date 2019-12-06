<?php
class AdminController extends Controller{
	public function index(){
			$profile = $this->model('AdminProfile');
			$login_id = $_SESSION['login_id'];
			$profile->getAdmin($login_id);
			$this->view("Profile/index", $profile);
	}

	public function create(){
		if(!isset($_POST["action"])){
			$this->view("Admin/create");
		}
		else{
			$profile = $this->model('UserProfile');
			$profile->first_name = $_POST["first_name"];
			$profile->last_name = $_POST["last_name"];
			$profile->login_id = $_SESSION['login_id'];
			$profile->insert();

			$_SESSION['user_id'] = $profile->user_id;

			header("location:/Home");

		}
	}
}
?>