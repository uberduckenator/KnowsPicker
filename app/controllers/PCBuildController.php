<?php

class PCBuildController extends Controller{
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
		$user_id = $theUser->user_id;
		$myBuilds = $build->getAllUser($user_id);
		foreach($myBuilds as $item)
		{
			$first_name = $theUser->first_name;
			$last_name = $theUser->last_name;

			//Add these to the arrays
			$item->first_name = $first_name;
			$item->last_name = $last_name;
		}
		$this->view('PCBuild/index', $myBuilds);	
	}

	/*public function buildDetails($pc_build_id)
	{
		$build = $this->model('PCBuild');
		$theBuild = $build->get($pc_build_id);
		$buildDetails = $this->model('PCBuildDetails')->getAll($pc_build_id);
		$itemDetails = [];
		if (!isset($buildDetails))
		{
			$this->view("PCBuild/details", ['Build'=>$theBuild]);
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
		
		$this->view("PCBuild/details", ['Build'=>$theBuild, 'BuildDetails'=>$itemDetails]);

	}*/

	public function createNewBuild()
	{
		$build = $this->model('PCBuild');
		if(!isset($_POST['action']))
		{
			$this->view('PCBuild/create');
		}
		else
		{
			$build->name = $_POST['name'];
			$build->description = $_POST['description'];
			$build->user_id = $_SESSION['user_id'];
			$build->insert();
			header("location:/PCBuild/setupBuild/$build->pc_build_id");	
		}
	}

	public function setupBuild($pc_build_id)
	{
		//Check compatibility HERE
		$build = $this->model('PCBuild');
		$theBuild = $build->get($pc_build_id);
		$buildDetails = $this->model('PCBuildDetails')->getAll($pc_build_id);
		$itemDetails = [];
		if ($buildDetails == null)
		{
			$this->view("PCBuild/setup", ['Build'=>$theBuild]);
		}
		else
		{
			//Loop through the buildDetails and get required information
			foreach ($buildDetails as $item)
			{
				$item_id = $item->item_id;
				$itemInfo = $this->model('Items')->get($item_id);
				$typeModel = $this->getTypeModel($itemInfo->item_type);
				$typeInfo = $typeModel->getItem($item_id);
				$itemDetails['Item Info'][] = $itemInfo;
				$itemDetails['Item Type Info'][] = $typeInfo; 
			}
			$this->view("PCBuild/setup", ['Build'=>$theBuild, 'Build Details'=>$itemDetails]);
		}
	}

	public function addPart($item_id)
	{
		$buildDetail = $this->model('PCBuildDetails');
		$buildDetail->item_id = $item_id;
		$buildDetail->pc_build_id = $_GET['pc_build_id'];
		$buildDetail->insert();
		$pc_build_id = $buildDetail->pc_build_id;
		header("location:/PCBuild/setupBuild/$pc_build_id");
	}

	public function removePart($pc_build_details_id)
	{
		$buildDetail = $this->model('PCBuildDetails');
		$buildDetail->delete($pc_build_details_id);
		header('location:/PCBuild/setupBuild');
	}

	//Function to return the type model
	private function getTypeModel($item_type)
	{
		$model;
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
