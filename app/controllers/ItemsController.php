<?php

class ItemsController extends Controller
{
	public function index(){
		
	}

	public function CPU($item_id){
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
			$CPU->item_id = $item_id;

			$CPU->insert();
			header("location:/Company/inventory");
		}
	}

	public function CPUCooler($item_id){
		if(!isset($_POST["action"])){
			$this->view("Item/CPUCooler");
		}
		else{
			$CPUCooler = $this->model("CPUCooler");

			$CPUCooler->model = $_POST['model'];
			$CPUCooler->sockets = $_POST['sockets'];
			$CPUCooler->fan_rpm = $_POST['fan_rpm'];
			$CPUCooler->height = $_POST['height'];
			$CPUCooler->item_id = $item_id;

			$CPUCooler->insert();
			header("location:/Company/inventory");
		}
	}

	public function GPU($item_id){
		if(!isset($_POST["action"])){
			$this->view("Item/GPU");
		}
		else{
			$GPU = $this->model("GPU");

			$GPU->part_no = $_POST['part_no'];
			$GPU->chipset = $_POST['chipset'];
			$GPU->memory = $_POST['memory'];
			$GPU->memory_type = $_POST['memory_type'];
			$GPU->core_clock = $_POST['core_clock'];
			$GPU->interface = $_POST['interface'];
			$GPU->length = $_POST['length'];
			$GPU->wattage = $_POST['wattage'];
			$GPU->item_id = $item_id;

			$GPU->insert();
			header("location:/Company/inventory");
		}
	}

	public function Motherboard($item_id){
		if(!isset($_POST["action"])){
			$this->view("Item/Motherboard");
		}
		else{
			$motherboard = $this->model("Motherboard");

			$motherboard->model = $_POST['model'];
			$motherboard->socket = $_POST['socket'];
			$motherboard->form_factor = $_POST['form_factor'];
			$motherboard->ram_slots = $_POST['ram_slots'];
			$motherboard->max_ram = $_POST['max_ram'];
			$motherboard->ram_type = $_POST['ram_type'];
			$motherboard->memory_speed = $_POST['memory_speed'];
			$motherboard->pci_e_slots = $_POST['pci_e_slots'];
			$motherboard->onboard_ethernet = $_POST['onboard_ethernet'];
			$motherboard->sata_ports = $_POST['sata_ports'];
			$motherboard->m2_slots = $_POST['m2_slots'];
			$motherboard->wifi = $_POST['wifi'];
			$motherboard->item_id = $item_id;

			$motherboard->insert();
			header("location:/Company/inventory");
		}
	}

	public function PCCase($item_id){
		if(!isset($_POST["action"])){
			$this->view("Item/PCCase");
		}
		else{
			$PcCase = $this->model("PcCase");

			$PcCase->type = $_POST['type'];
			$PcCase->power_supply = $_POST['power_supply'];
			$PcCase->mb_form_factor = $_POST['mb_form_factor'];
			$PcCase->max_gpu_length = $_POST['max_gpu_length'];
			$PcCase->internal_2_5_bays = $_POST['internal_2_5_bays'];
			$PcCase->internal_3_5_bays = $_POST['internal_3_5_bays'];
			$PcCase->type = $_POST['type'];
			$PcCase->item_id = $item_id;

			$PcCase->insert();
			header("location:/Company/inventory");
		}
	}

	public function PSU($item_id){
		if(!isset($_POST["action"])){
			$this->view("Item/PSU");
		}
		else{
			$PSU = $this->model("PSU");

			$PSU->model = $_POST['model'];
			$PSU->form_factor = $_POST['form_factor'];
			$PSU->efficiency_rating = $_POST['efficiency_rating'];
			$PSU->wattage = $_POST['wattage'];
			$PSU->modular = $_POST['modular'];
			$PSU->fanless = $_POST['fanless'];
			$PSU->item_id = $item_id;

			$PSU->insert();
			header("location:/Company/inventory");
		}
	}

	public function RAM($item_id){
		if(!isset($_POST["action"])){
			$this->view("Item/RAM");
		}
		else{
			$RAM = $this->model("RAM");

			$RAM->part_no = $_POST['part_no'];
			$RAM->speed = $_POST['speed'];
			$RAM->modules = $_POST['modules'];
			$RAM->item_id = $item_id;

			$RAM->insert();
			header("location:/Company/inventory");
		}
	}

	public function Storage($item_id){
		if(!isset($_POST["action"])){
			$this->view("Item/Storage");
		}
		else{
			$storage = $this->model("Storage");

			$storage->part_no = $_POST['part_no'];
			$storage->capacity = $_POST['capacity'];
			$storage->type = $_POST['type'];
			$storage->cache = $_POST['cache'];
			$storage->form_factor = $_POST['form_factor'];
			$storage->interface = $_POST['interface'];
			$storage->nvme = $_POST['nvme'];
			$storage->item_id = $item_id;

			$storage->insert();
			header("location:/Company/inventory");
		}
	}


	
}