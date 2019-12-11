<?php
class LoginController extends Controller{
	public function index(){
		if(!isset($_POST["action"])){
			$this->view("Login/index");
		}
		else{
			$user = $this->model("Login")->find($_POST["username"]);

			if($user !=null && password_verify($_POST["password"], $user->password_hash)){
				$_SESSION["login_id"] = $user->login_id;
				$_SESSION["role"] = $user->role;
				switch ($_SESSION['role']) {
					case 'company':
						$company = $this->model('CompanyProfile');
						$_SESSION['company_id'] = $company->getCompany($_SESSION['login_id']);
						break;
										
					default:
						$user = $this->model('UserProfile');
						$_SESSION['user_id'] = $user->getUser($_SESSION['login_id'])->user_id;
						break;
				}
				return header("location:/Home");
			}
			else{
				$this->view("Login/index",['error' => 'Bad username/password']);

			}
		}
	}

	public function register($role){
		if(!isset($_POST["action"])){
			if ($role == "company") {
				$this->view("Company/CompanyRegister");
			}else{
				$this->view("Login/register");
			}
		}
		else if($role == "company"){
			if($_POST["password"] == $_POST["password_confirm"]){
				$user = $this->model('Login');
				$user->username = $_POST["username"];
				
				//Hashing password
				$user->password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
				//password_hash(string, PASSWORD_DEFAULT)
				$user->role = $role;

				$_SESSION['login_id'] = $user->insert();
				$_SESSION['role'] = $user->role;
				header("location:/Company/create");
			}
		}
		else{
			if($_POST["password"] == $_POST["password_confirm"]){

				$user = $this->model('Login');
				$user->username = $_POST["username"];
				
				//Hashing password
				$user->password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
				//password_hash(string, PASSWORD_DEFAULT)
				$user->role = $role;

				$_SESSION['login_id'] = $user->insert();
				header("location:/Profile/create");

			}
		}
	}

	public function logout(){
		session_destroy();
		header("location:/Login/index");
			$this->view('Login/index');
	}

}
?>