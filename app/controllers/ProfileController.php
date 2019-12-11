<?php
class ProfileController extends Controller{
	public function index(){
			$profile = $this->model('UserProfile');
			$theProfile = $profile->get($_SESSION['user_id']);
			$thePayment = $this->model('Payment')->get($_SESSION['user_id']);
			$this->view("Profile/index", ['Profile'=>$theProfile, 'Payment'=>$thePayment]);
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

			$_SESSION['user_id'] = $profile->user_id;

			header("location:/Home");

		}
	}

	public function editProfile($user_id)
	{
		if(!isset($_POST["action"])){
			$theProfile = $this->model('UserProfile')->get($user_id);
			$countries = $this->model("Countries")->getCountries();
			
			$this->view("Profile/editProfile", ['Profile'=>$theProfile,'Countries'=>$countries]);
		}
		else{
			$profile = $this->model('UserProfile');

			$profile->user_id = $user_id;
			$profile->first_name = $_POST["first_name"];
			$profile->last_name = $_POST["last_name"];
			$profile->email = $_POST["email"];
			$profile->city = $_POST["city"];
			$profile->street_address = $_POST["street_address"];
			$profile->postal_code = $_POST["postal_code"];
			$profile->login_id = $_SESSION['login_id'];
			$profile->country_id = $_POST['countries'];

			$profile->update();

			header("location:/Profile");
		}
	}

	public function editPayment($payment_id)
	{
		if(!isset($_POST['action']))
		{
			$thePayment = $this->model("Payment")->getPayment($payment_id);
			$this->view("Profile/editPayment", $thePayment);
		}
		else
		{
			$payment = $this->model("Payment");
			$payment->payment_id = $payment_id;
			$payment->cardnumber = $_POST['cardnumber'];
			$payment->cardholder = $_POST['cardholder'];
			$payment->cvv2 = $_POST['cvv2'];
			$expiration_date = $_POST['expiration_month'] . '/' . $_POST['expiration_year'];
			$payment->expiration_date = $expiration_date;
			$payment->update();
			header('location:/Profile');
		}
	}
}
?>