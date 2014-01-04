<?php
	$max_file_size = 1048576; //expressed in bytes
							  //10240 = 10KB
							  //102400 = 100KB
	  						  //1048576 = 1MB
							  //10485760 = 10MB
		
	
	$photo = new photo();
	if(isset($_FILES['file_upload'])){
		$photo->attach_file($_FILES['file_upload'],$username);
	}

	//can't save if there are pre-existing errors;
	if(!empty($photo->errors)){
		return false;
	}
	
	if($photo->save_photo()){
		//success
		$default_img = $photo->filename;
		copy(SITE_ROOT.DS."resources/users/".$default_img,SITE_ROOT.DS."resources/users/".$username."_thumb.gif");

		$photo->adjust_image_size($username."_default.jpg");

		$photo->thumbnail($username."_thumb.gif");
		$thumbnail =$username."_thumb.gif";



		
	}else{
		//failure
		$message = join("<br />", $photo->errors);//get all the error info from the photgraph class.
	}

	

?>