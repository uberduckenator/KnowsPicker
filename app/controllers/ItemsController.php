<?php

class ItemsController extends Controller
{
	public function index(){
		
	}

	public function CPU(){
		if(!isset($_POST["action"])){
			$this->view("Item/CPU");
		}
		else{
			$CPU = $this->model("CPU");

		$CPU->model = $_POST['model'];
		$CPU->socket = $_POST['socket'];
		$CPU->cores = $_POST['cores'];
		$CPU->clock_speed = $_POST['clock_speed'];
		$CPU->wattage = $_POST['wattage'];
		$CPU->series = $_POST['series'];
		$CPU->integrated_graphics = $_POST['integrated_graphics'];
		$CPU->cpu_cooler = $_POST['cpu_cooler'];

		$CPU->insert();
		header("location:/Company/inventory");
		}
	}

	
}