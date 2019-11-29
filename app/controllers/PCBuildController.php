<?php
class PCBuild extends Controller{
	public function index(){
		$build = $this->model('PCBuild');
		$allBuilds = $build->getAll();
		$this->view('Default/allGood', $allBuilds);
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

		header('location:/PCBuild/setupBuild/$build->pc_build_id');
	}

	public function setupBuild($pc_build_id)
	{
		//We will verify all the additions here

	}

	public function chooseCPU()
	{
		//Two fields requirements and compatibility
		//Support field for what is supported.
	}
}
?>
