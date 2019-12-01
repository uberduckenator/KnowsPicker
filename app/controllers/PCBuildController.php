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
			$item['first_name'] = $first_name;
			$item['last_name'] = $last_name;
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
		$this->view("PCBuild/setup/$pc_build_id", ['Build'=>$theBuild, 'BuildDetails'=>$buildDetails]);
	}

	public function addPart($pc_build_id, $item_id)
	{
		$buildDetail = $this->model('PCBuildDetails');
		$buildDetail->item_id = $item_id;
		$buildDetail->pc_build_id = $pc_build_id;
		$buildDetail->insert();
	}
}
?>
