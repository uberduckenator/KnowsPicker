<?php
class CompanyController extends Controller{
	
	public function index(){
		$company = $this->model('CompanyProfile');
		$login_id = $_SESSION['login_id'];
		$company->getCompany($login_id);
		$this->view("Company/index", $company);
	}

	public function create(){
		if(!isset($_POST["action"])){
			$this->view("Company/create");
		}
		else{
			$company = $this->model("CompanyProfile");
			$picture = $this->model("Pictures");

			$picture->filepath = $_POST['company_picture'];
			$picture->insert();

			$company->company_name = $_POST['company_name'];
			$company->picture_id = $picture->picture_id;
			$company->login_id = $_SESSION['login_id'];
			$company->insert();

			$_SESSION['company_id'] = $company->company_id;
			
			header("location:/Home");
		}
	}

	public function inventory()
	{
		$inventory =$this->model("Items");
		$company = $this->model("CompanyProfile")->getCompany($_SESSION['login_id']);
		$company_id = $company->company_id;
		$companyItems = $inventory->getItemsFromCompany($company_id);

		$this->view("Company/inventory", $companyItems);
	}

	public function addItems(){
		if(!isset($_POST["action"])){
			$itemtype = $this->model("ItemType")->getAll();
			$this->view("Company/additem", $itemtype);
		}
		else{
			$inventory = $this->model("Items");
			$company_id = $this->model("CompanyProfile")->getCompany($_SESSION['login_id'])->company_id;
			$picture = $this->model("Pictures");

			$picture->filepath = $_POST['item_image'];
			$picture->insert();

			$inventory->item_name = $_POST['item_name'];
			$inventory->price = $_POST['price'];
			$item_type = $_POST['item_type'];
			$inventory->item_type = $item_type;
			$inventory->stock = $_POST['stock'];
			$inventory->rebate = $_POST['rebate'];
			$inventory->max_sale_quantity = $_POST['max_sale_quantity'];
			$inventory->company_id = $company_id;
			$inventory->picture_id = $picture->picture_id;

			$inventory->insert();
			
			switch($item_type){
				case "CPU":
					header("location:/Items/addCPU/$inventory->item_id");
					break;
				case "Cooler":
					header("location:/Items/addCPUCooler/$inventory->item_id");
					break;
				case "GPU":
					header("location:/Items/addGPU/$inventory->item_id");
					break;
				case "Motherboard":
					header("location:/Items/addMotherboard/$inventory->item_id");
					break;
				case "Case":
					header("location:/Items/addPCCase/$inventory->item_id");
					break;
				case "PSU":
					header("location:/Items/addPSU/$inventory->item_id");
					break;
				case "RAM":
					header("location:/Items/addRAM/$inventory->item_id");
					break;
				case "Storage":
					header("location:/Items/addStorage/$inventory->item_id");
					break;
				default:
					header("location:/Company/inventory");
			}
		}
	}

	public function upload($theFile)
	{
		$target_dir = "uploads/";	//the folder where files will be saved
		$allowedTypes = array("jpg", "png", "jpeg", "gif", "bmp");// Allow certain file formats
		$max_upload_bytes = 5000000;


		$theFile = $_FILES['fileToUpload'];
		$uploadOk = 1;
		if(isset($theFile)) {
				//Check if image file is a actual image or fake image
				//this is not a guarantee that malicious code may be passed in disguise
			$error = '';
			$message = '';
			$check = getimagesize($theFile["tmp_name"]);
			if($check !== false) {
				$error .= "File is an image - " . $check["mime"] . ".<br>";
				$uploadOk = 1;
			} else {
				echo "File is not an image.<br>";
				$uploadOk = 0;
			}
			$extension = strtolower(pathinfo(basename($theFile["name"]),PATHINFO_EXTENSION));
			//give a name to the file such that it should never collide with an existing file name.
			$target_file_name = uniqid().'.'.$extension;

			$target_path = $target_dir . $target_file_name;
			//NOTE: that this file path probably should be saved to the database for later retrieval

			//It is very unlikely given the naming scheme that another file of the same name will exist... 
			// Check if file already exists
			/*if (file_exists($target_path)) {
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}*/

			//You may limit the size of the incoming file... Check file size
			if ($theFile["size"] > $max_upload_bytes) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}

			// Allow certain file formats
			if(!in_array($extension, $allowedTypes)) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}

			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			} else {// if everything is ok, try to upload file - to move it from the temp folder to a permanent folder
				if (move_uploaded_file($theFile["tmp_name"], $target_path)) {
					$message .= "The file ". basename( $theFile["name"]). " has been uploaded as <a href='$target_path'>$target_path</a>.";
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
			}
		}
		if($error != NULL)
        {
           $this->view('Company/inventory', ['error' => $error, 'message' => $message]);
            
        }
        else
        {
            return $target_path;
        }
	}
}