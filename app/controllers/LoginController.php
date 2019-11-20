<?php
class LoginController extends Controller{
	public function index(){
		if(!isset($_POST["action"])){
<<<<<<< HEAD
			$this->view("Login/index");
		}
		else{
			$user = $this->model("Login")->find($_POST["username"]);

			if($user !=null && password_verify($_POST["password"], $user->password)){
				$SESSION["login_id"] = $user->user_id;
				return header("location:/Default/index");
			}
			else{
				$this->view("Login/index",['error' => 'Bad username/password']);
			}
		}
	}

	public function register(){
		if(!isset($_POST["action"])){
			$this->view("Login/register");

		}
		else{
			if($_POST["password"] == $_POST["password_confirm"]){
				$user = $this->model('Login');
				$user->username = $_POST["username"];

				//Hashing password
				$user->password = password_hash($_POST["password"]);
				$user->insert();

				header("location:/Login/index");

			}
		}
	}

	public function logout(){
		session_destroy();
		header("location:/Login/index");
=======
			$this->view('Login/index');
		}

>>>>>>> 34a8324aa86dbec7d71254d496cae50e46716eec
	}
}
?>