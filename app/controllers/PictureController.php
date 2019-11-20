<?php

class PictureController extends Controller
{
	public function upload()
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
	echo $error; //Whatever view will be here
}


	}
}