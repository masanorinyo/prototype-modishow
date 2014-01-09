<?php
	
	require_once("../../config/initialize.php");
	
	$receivedArray = isset($_POST["outfit_info"]) ? $_POST["outfit_info"]:NULL;
	$face = isset($_POST["face"]) ? $_POST["face"]:NULL;
	$arms = isset($_POST["arms"]) ? $_POST["arms"]:NULL;
	$legs = isset($_POST["legs"]) ? $_POST["legs"]:NULL;
	$torso = isset($_POST["torso"]) ? $_POST["torso"]:NULL;
	$shadow = isset($_POST["shadow"]) ? $_POST["shadow"]:NULL;
	$background_src = isset($_POST["background"]) ? $_POST["background"]:NULL;
	$backgroundId = isset($_SESSION["backgroundId"]) ? $_SESSION["backgroundId"]:NULL;
	$modelId = isset($_SESSION["modelId"]) ? $_SESSION["modelId"]:NULL;
	$user_id = isset($_SESSION["user_id"]) ? $_SESSION["user_id"]:NULL;


	function aasort (&$array, $key) {
        $sorter=array();
        $ret=array();
        reset($array);
        foreach ($array as $ii => $va) {
            $sorter[$ii]=$va[$key];
        }
        asort($sorter);
        foreach ($sorter as $ii => $va) {
            $ret[$ii]=$array[$ii];
        }
        $array=$ret;
    }

    aasort($receivedArray,"zIndex");
 //    aasort($embelishmentArray,"zIndex");

    
	$fileName = "m";
	




	//first adds each id number 
	//when the file system is searching for an image,
	//it can quickly ignore if the order of id numbers are different.
	$product_id_array=[];
	$k=0;

	if($receivedArray){

		foreach($receivedArray as $value => $key){
			$fileName .="p".$key["productId"];
			$product_id_array[$k]= $key["productId"];		
			$k++;
		}

		//too pass information to the collage.
		
		$_SESSION["product_id"]="";
		$_SESSION["product_id"]=$product_id_array;
		
		$fileName .=$backgroundId;
		$fileName .=$modelId;

		
		$fileName_sml=$fileName."_sml";


		$fileName .=".jpg";
		$fileName_sml.=".jpg";
		
		$canvas = new Imagick();
		$canvas->newImage(600,600, new ImagickPixel('none'));
		$canvas->setImageFormat('jpg');
		
		$background = new Imagick($background_src);
		
		//background images need to be resized to fit the canvas 
		$background->resizeImage ( 800, 800,  imagick::FILTER_LANCZOS, 1, TRUE);
		
		$face = new Imagick($face);
		$face->resizeImage (650, 650,  imagick::FILTER_LANCZOS, 1, TRUE);
		$torso = new Imagick($torso);
		$torso->resizeImage (650, 650,  imagick::FILTER_LANCZOS, 1, TRUE);
		$arms = new Imagick($arms);
		$arms->resizeImage (650, 650,  imagick::FILTER_LANCZOS, 1, TRUE);
		$legs = new Imagick($legs);
		$legs->resizeImage (650, 650,  imagick::FILTER_LANCZOS, 1, TRUE);
		$shadow = new Imagick($shadow);
		$shadow->resizeImage (650, 650,  imagick::FILTER_LANCZOS, 1, TRUE);



		$canvas->compositeImage( $background, imagick::COMPOSITE_DEFAULT, (((($canvas->getImageWidth()) - ($background->getImageWidth())))/2), -20 );
		$canvas->compositeImage( $shadow, imagick::COMPOSITE_DEFAULT,(((($canvas->getImageWidth()) - ($shadow->getImageWidth())))/2),-20);
		$canvas->compositeImage( $torso, imagick::COMPOSITE_DEFAULT,(((($canvas->getImageWidth()) - ($torso->getImageWidth())))/2),-20);
		$canvas->compositeImage( $arms, imagick::COMPOSITE_DEFAULT,(((($canvas->getImageWidth()) - ($arms->getImageWidth())))/2),-20);
		$canvas->compositeImage( $legs, imagick::COMPOSITE_DEFAULT,(((($canvas->getImageWidth()) - ($legs->getImageWidth())))/2),-20);
		$canvas->compositeImage( $face, imagick::COMPOSITE_DEFAULT,(((($canvas->getImageWidth()) - ($face->getImageWidth())))/2),-20);
		



		$k = 0;
		$item = [];
		foreach($receivedArray as $value => $key){
			$item[$k]=new Imagick($key["item_url"]);
			$item[$k]->resizeImage (582, 582,  imagick::FILTER_LANCZOS, 1, TRUE);
			$canvas->compositeImage($item[$k], imagick::COMPOSITE_DEFAULT,(((($canvas->getImageWidth()) - ($item[$k]->getImageWidth())))/2)+1,16);
			$k++;
		}
		
		header('Content-type: image/jpg');
		



		$canvas->writeImage(SITE_ROOT.DS."resources/styles".DS.$fileName);
		


		file_put_contents(SITE_ROOT.DS."resources/styles".DS.$fileName,$canvas);
		

		$canvas->destroy();


		copy(SITE_ROOT.DS."resources/styles/".$fileName,SITE_ROOT.DS."resources/styles/".$fileName_sml);			


		$image = new Imagick(SITE_ROOT.DS."resources/styles/".$fileName_sml);
		
		$image->cropThumbnailImage(400,400);

		$image->setImageFormat('jpg');
		
		$image->writeImage();
		
		file_put_contents(SITE_ROOT.DS."resources/styles/".$fileName_sml,$image);

		$image->destroy();



		if(!empty($fileName) && !empty($fileName_sml)){
			//echo json_encode($json);	

			$found_model = Outfit_on_model::find_by_attribute($fileName,"default_filename");
			$found_model = empty($found_model)?false:array_shift($found_model);
			
			if($found_model){
				echo $id = $found_model->outfitOnModel_id;	
			}else{
				$new_model=new Outfit_on_model;
				$new_model->default_filename=$fileName;
				$new_model->m_size_filename=$fileName_sml;
				$result = $new_model->save();

				if($result){
					echo $id = $new_model->outfitOnModel_id;				

					foreach($receivedArray as $value => $key){
						$p_id=$key['productId'];
						$zIndex=$key['zIndex'];

						$sql  = "INSERT INTO `product_on_model`(`product_id`, `outfitOnModel_id`, `z_index`) ";
						$sql .= "VALUES ({$id},{$p_id},{$zIndex})";
						$found = $database->query($sql);
					}

				}else{
				
					echo $message="Failed to create a style";
				}
			}
		}else{
			echo $message="Failed to create a style";
		}
		





	}else{
		echo $message="Failed to make a style";
	}


			


			
		




?>