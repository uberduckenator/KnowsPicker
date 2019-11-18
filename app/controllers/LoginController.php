<?php
class LoginController extends Controller{
	public function index(){
		if(!isset($_POST["action"])){
			$this->view('Login/index');
    }
?>