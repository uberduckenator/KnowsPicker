<?php
class DefaultController extends Controller{
	public function index(){
		$person = $this->model('Person');
		$people = $person->getAll();

		$this->view('Default/allGood', $people);
	}

	public function create(){
		if(!isset($_POST['action'])){
			$this->view('Default/create');	
		}else{
			$person = $this->model('Person');
			$person->first_name = $_POST['first_name'];
			$person->last_name = $_POST['last_name'];
			$person->insert();
			//redirecttoaction
			header('location:/Default/index');
		}
	}

	public function edit($person_id){
		$thePerson = $this->model('Person')->find($person_id);
		if(!isset($_POST['action'])){
			$this->view('Default/edit', $thePerson);	
		}else{
			$thePerson->first_name = $_POST['first_name'];
			$thePerson->last_name = $_POST['last_name'];
			$thePerson->update();
			//redirecttoaction
			header('location:/Default/index');
		}
	}




	public function delete($person_id){
		$thePerson = $this->model('Person')->find($person_id);
		if(!isset($_POST['action'])){
			$this->view('Default/delete', $thePerson);	
		}else{
			$thePerson->delete();
			//redirecttoaction
			header('location:/Default/index');
		}

	}
}
?>
