<?php
class HomeController extends Controller{

	public function index()
	{
		//We need to get the top 5 best rated CPUs, etc.
		

		$this->view('Home/index');
	}
}
?>
