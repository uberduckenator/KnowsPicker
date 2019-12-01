<?php
class HomeController extends Controller{

	public function index()
	{
		//We need to get the top 5 best rated CPUs, etc.
    
    	$items = $this->model('Items');
		$topCPU = $items->getTop('cpu', '5');
		$topGPU = $items->getTop('gpu', '5');
		$topCooler = $items->getTop('cpu_cooler', '5');
		$topMotherboard = $items->getTop('motherboard', '5');
		$topStorage = $items->getTop('storage', '5');
		$topPSU = $items->getTop('psu', '5');
		$topRam = $items->getTop('ram', '5');
		$topCase = $items->getTop('pc_case', '5');

		$this->view('Home/index', ['CPU'=>$topCPU, 'GPU'=>$topGPU, 'Cooler'=>$topCooler, 'Motherboard'=>$topMotherboard,
									'Storage'=>$topStorage, 'PSU'=>$topPSU, 'RAM'=>$topRam, 'Case'=>$topCase]);
	}

	public function search()
	{
		$error = "";
		$items = $this->model('Items');
		$searchString = $_GET['searchBox'];
		$searchQuery = "%" . $searchString . "%";
		$results =$items->search($searchQuery);

		if($results == null)
		{
		 	$error = "Sorry no results were found for $searchString";
		}

		$this->view('Home/search', ['SearchString'=>$searchString, 'Results'=>$results, 'Error'=>$error]);
	}
}
?>
