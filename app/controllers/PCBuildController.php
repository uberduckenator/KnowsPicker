<?php
class PCBuild extends Controller{
	public function index(){
		$build = $this->model('PCBuild');
		$allBuilds = $build->getAll();
		$user = $this->model('UserProfile');
		foreach($allBuilds as $item)
		{
			$user_id = $item->user_id;
			$theUser = $user->get($user_id);
			$first_name = $theUser->first_name;
			$last_name = $theUser->last_name;

			//Add these to the arrays
			$item->first_name = $first_name;
			$item->last_name = $last_name;
		}
		$this->view('PCBuild/index', $allBuilds);
	}

	public function myBuilds()
	{
		$build = $this->model('PCBuild');
		$user = $this->model('UserProfile');
		$theUser = $user->getUser($_SESSION['login_id']);
		$myBuilds = $build->getAllUser($theUser->user_id);
		foreach($myBuilds as $item)
		{
			$first_name = $theUser->first_name;
			$last_name = $theUser->last_name;

			//Add these to the arrays
			$item->first_name = $first_name;
			$item->last_name = $last_name;
		}
		$this->view('PCBuild/index', $allBuilds);	
	}

	public function createNewBuild()
	{
		$build = $this->model('PCBuild');
		if(!isset($_POST['action']))
		{
			$this->view('PCBuild/create');
		}
		$build->name = $_POST['build'];
		$build->description = $_POST['description'];
		$build->user_id = $this->model('UserProfile')->getUser($_SESSION['login_id']);
		$build->insert();
		header("location:/PCBuild/setupBuild/$build->pc_build_id");
	}

	public function setupBuild($pc_build_id)
	{
		//Check compatibility HERE
		$build = $this->model('PCBuild');
		$theBuild = $build->get($pc_build_id);
		$buildDetails = $this->model('PCBuildDetails')->getAll($pc_build_id);
		$itemDetails = [];
		if (!isset($buildDetails))
		{
			$this->view("PCBuild/setup", ['Build'=>$theBuild]);
		}
		//Loop through the buildDetails and get required information
		foreach ($buildDetails as $item)
		{
			$item_id = $item->item_id;
			$itemInfo = $this->model('Items')->get($item_id);
			$typeModel = getTypeModel($itemInfo->item_type);
			$typeInfo = $typeModel->getItem($item_id);
			$itemDetails['Item Info'][] = $itemInfo;
			$itemDetails['Item Type Info'][] = $typeInfo; 

		}
		
		$this->view("PCBuild/setup", ['Build'=>$theBuild, 'BuildDetails'=>$itemDetails])
	}

	public function addPart($pc_build_id, $item_id)
	{
		$buildDetail = $this->model('PCBuildDetails');
		$buildDetail->item_id = $item_id;
		$buildDetail->pc_build_id = $pc_build_id;
		$buildDetail->insert();
	}

	public function removePart($item_id)
	{

	}

	//Function to return the type model
	private static function getTypeModel($item_type)
	{
		$model = [];
		switch($item_type){
				case "CPU":
					$model = $this->model("CPU");
					break;
				case "CPU Cooler":
					$model = $this->model("CPUCooler");
					break;
				case "GPU":
					$model = $this->model("GPU");
					break;
				case "Motherboard":
					$model = $this->model("Motherboard");
					break;
				case "PC Case":
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