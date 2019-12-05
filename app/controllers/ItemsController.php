<?php

class ItemsController extends Controller{
	
	public function index(){

	}

	public function CPU()
	{
		$item = $this->model('Items');
		$itemCPU = $item->getType('CPU');
		$this->view('Item/index', $itemCPU);
	}

	public function addCPU($item_id){
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

	public function CPUCooler()
	{
		$item = $this->model('Items');
		$itemCPUCooler = $item->getType('CPUCooler');
		$this->view('Item/index', $itemCPUCooler);
	}

	public function addCPUCooler($item_id){
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

	public function GPU()
	{
		$item = $this->model('Items');
		$itemGPU = $item->getType('GPU');
		$this->view('Item/index', $itemGPU);
	}

	public function addGPU($item_id){
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

	public function Motherboard()
	{
		$item = $this->model('Items');
		$itemMotherboard = $item->getType('Motherboard');
		$this->view('Item/index', $itemMotherboard);
	}

	public function addMotherboard($item_id){
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

	public function PCCase()
	{
		$item = $this->model('Items');
		$itemPCCase = $item->getType('PCCase');
		$this->view('Item/index', $itemPCCase);
	}

	public function addPCCase($item_id){
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

	public function PSU()
	{
		$item = $this->model('Items');
		$itemPSU = $item->getType('PSU');
		$this->view('Item/index', $itemPSU);
	}

	public function addPSU($item_id){
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

	public function RAM()
	{
		$item = $this->model('Items');
		$itemRAM = $item->getType('RAM');
		$this->view('Item/index', $itemRAM);
	}

	public function addRAM($item_id){
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

	public function Storage()
    {
		$item = $this->model('Items');
		$itemStorage = $item->getType('Storage');
		$this->view('Item/index', $itemStorage);
	}

	public function addStorage($item_id){
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

	public function addItems(){
		if(!isset($_POST["action"])){
			$this->view("Company/additem");
		}
		else{
			$inventory = $this->model("Items");

			$inventory->item_name = $_POST['item_name'];
			$inventory->price = $_POST['price'];
			$inventory->item_type = $_POST['item_type'];
			$inventory->stock = $_POST['stock'];
			$inventory->rebate = $_POST['rebate'];
			$inventory->max_sale_quantity = $_POST['max_sale_quantity'];
			$inventory->company_id = $this->model('CompanyProfile')->getCompany($_SESSION['company_id']);

			$inventory->insert();
			header("location:/inventory");
		}
	}

	public function edit($item_id)
	{
		$items = $this->model('Items');
		$theItem = $items->get($item_id);

		$item_type = $theItem->item_type;
		$typeModel = $this->getTypeModel($item_type);
		$error = '';
		if (!isset($_POST["action"]))
		{	
			$typeDetails = $typeModel->getItem($item_id);
			return $this->view("Item/edit", ['ItemInfo'=>$theItem, 'ItemDetailsInfo'=>$typeDetails]);
		}


		//Update items
		$items->item_name = $_POST['item_name'] ;
		$items->price = $_POST['price'];
		$items->item_type = $_POST['item_type'];
		$items->stock = $_POST['stock'];
		$items->rebate = $_POST['rebate'];
		$items->max_sale_quantity = $_POST['max_sale_quantity'];
		$items->update($item_id);

		//Update item_type info
		//Lots of code here
		switch ($item_type)
		{
				case "CPU":
					$typeModel->model = $_POST['modelType'];
					$typeModel->socket = $_POST['socket'];
					$typeModel->cores = $_POST['cores'];
					$typeModel->clock_speed = $_POST['clock_speed'];
					$typeModel->wattage = $_POST['wattage'];
					$typeModel->series = $_POST['series'];
					$typeModel->integrated_graphics = $_POST['integrated_graphics'];
					$typeModel->cpu_cooler = $_POST['cpu_cooler'];
					break;
				case "Cooler":
					$typeModel->model = $_POST['model'];
					$typeModel->sockets = $_POST['sockets'];
					$typeModel->fan_rpm = $_POST['fan_rpm'];
					$typeModel->height = $_POST['height'];
					break;
				case "GPU":
					$typeModel->part_no = $_POST['part_no'];
					$typeModel->chipset = $_POST['chipset'];
					$typeModel->memory = $_POST['memory'];
					$typeModel->memory_type = $_POST['memory_type'];
					$typeModel->core_clock = $_POST['core_clock'];
					$typeModel->interface = $_POST['interface'];
					$typeModel->length = $_POST['length'];
					$typeModel->wattage = $_POST['wattage'];
					break;
				case "Motherboard":
					$typeModel->model = $_POST['height'];
					$typeModel->socket = $_POST['socket'];
					$typeModel->form_factor = $_POST['form_factor'];
					$typeModel->ram_slots = $_POST['ram_slots'];
					$typeModel->max_ram = $_POST['max_ram'];
					$typeModel->memory_speed = $_POST['memory_speed'];
					$typeModel->pci_e_slots = $_POST['pci_e_slots'];
					$typeModel->onboard_ethernet = $_POST['onboard_ethernet'];
					$typeModel->sata_ports = $_POST['sata_ports'];
					$typeModel->m2_slots = $_POST['m2_slots'];
					$typeModel->wifi = $_POST['wifi'];
					break;
				case "Case":
					$typeModel->type = $_POST['type'];
					$typeModel->power_supply = $_POST['power_supply'];
					$typeModel->mb_form_factor = $_POST['mb_form_factor'];
					$typeModel->max_gpu_length = $_POST['max_gpu_length'];
					$typeModel->internal_2_5_bays = $_POST['internal_2_5_bays'];
					$typeModel->internal_3_5_bays = $_POST['internal_3_5_bays'];
					break;
				case "PSU":
					$typeModel->model = $_POST['model'];
					$typeModel->form_factor = $_POST['form_factor'];
					$typeModel->efficiency_rating = $_POST['efficiency_rating'];
					$typeModel->wattage = $_POST['wattage'];
					$typeModel->modular = $_POST['modular'];
					$typeModel->fanless = $_POST['fanless'];
					break;
				case "RAM":
					$typeModel->part_no = $_POST['part_no'];
					$typeModel->speed = $_POST['speed'];
					$typeModel->modules = $_POST['modules'];
					break;
				case "Storage":
					$typeModel->part_no = $_POST['part_no'];
					$typeModel->capacity = $_POST['capacity'];
					$typeModel->type = $_POST['type'];
					$typeModel->cache = $_POST['cache'];
					$typeModel->form_factor = $_POST['form_factor'];
					$typeModel->interface = $_POST['interface'];
					$typeModel->nvme = $_POST['nvme'];
					break;
				default:
					$error = "No ItemType found";
		}
		$typeModel->update($item_id);

		header('location:/Company/inventory');

	}

	public function details($item_id)
	{
		$items = $this->model('Items');
		$theItem = $items->get($item_id);
		$item_type = $theItem->item_type;
		$typeModel = $this->getTypeModel($item_type);
		$typeDetails = $typeModel->getItem($item_id);

		$this->view('Item/details', ['Item'=>$theItem, 'ItemType'=>$typeDetails]);
	}

	public function delete($item_id)
	{
		$items = $this->model('Items');
		$theItem = $items->get($item_id);
		$item_type = $theItem->item_type;
		$typeModel = $this->getTypeModel($item_type);
		if (!isset($_POST["action"]))
		{
			$typeDetails = $typeModel->getItem($item_id);
			$this->view('Item/delete', ['Item'=>$theItem, 'ItemType'=>$typeDetails]);
		}
		$items->delete($item_id);
		$typeModel->delete($item_id);

		header('location:/Company/inventory');
	}

	//Returns a specific model based on the item_type value in the item table
	private function getTypeModel($item_type)
	{
		$model = [];
		switch($item_type){
				case "CPU":
					$model = $this->model("CPU");
					break;
				case "Cooler":
					$model = $this->model("CPUCooler");
					break;
				case "GPU":
					$model = $this->model("GPU");
					break;
				case "Motherboard":
					$model = $this->model("Motherboard");
					break;
				case "Case":
					$model = $this->model("PcCase");
					break;
				case "PSU":
					$model = $this->model("PSU");
					break;
				case "RAM":
					$model = $this->model("RAM");
					break;
				case "Storage":
					$model = $this->model("Storage");
					break;
				default:
					return null;
		}
		return $model;
	}
}
?>	
