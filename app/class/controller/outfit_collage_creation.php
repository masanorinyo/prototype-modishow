<?php
	// collage creation
	require_once("../../config/initialize.php");
	
	$receivedArray = isset($_POST["outfit_info"]) ? $_POST["outfit_info"]:NULL;
	
	if($receivedArray){

		$canvasWidth = isset($_POST["canvasWidth"]) ? $_POST["canvasWidth"]:NULL;;
	    $canvasHeight = isset($_POST["canvasHeight"]) ? $_POST["canvasHeight"]:NULL;;

	    $canvasWidth = (INT)$canvasWidth;
	    $canvasHeight = (INT)$canvasWidth;

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


		//create the name 
		//c stnads for collage
		//m stands for manually created
		$fileName = "cm"; 

		//first adds each id number 
		//when the file system is searching for an image,
		//it can quickly ignore if the order of id numbers are different.
		foreach($receivedArray as $value => $key){
			
			if($key["productId"]!="undefined"){
				$fileName .="p".$key["productId"];
			}else if($key["embelishmentId"]!="undefined"){
				$fileName .="e".$key["embelishmentId"];
			}else if($key["beautyId"]!="undefined"){
				$fileName .="b".$key["beautyId"];
			}else if($key["peopleId"]!="undefined"){
				$fileName .="pp".$key["peopleId"];
			}
		}

		//add the extra information to the file name 
		//so that the file name becomes unique.
		foreach($receivedArray as $value => $key){
			
			$fileName .=round($key["x_value"],0);
			$fileName .=round($key["y_value"],0);
			
		}

		$fileName_sml=$fileName;

		$fileName .= ".jpg";
		$fileName_sml.="_sml.jpg";


		if(!empty($fileName) && !empty($fileName_sml)){
			//check to see if there is an outfit with the same name

			$found_collage = Collage::find_by_attribute($fileName,"default_filename");
			$found_collage = empty($found_collage)? false: array_shift($found_collage);
			
			if($found_collage){
				//if there is an image with the same file name, there is no need to recreate the file.
				echo $collage_id = $found_collage->collage_id;	

			}else{




				//if there is no iamge with the same name, create one.
				   
			    
			    //determine whether the canvas needs to be expanded.
			  	$extendedLength_height =0; 
			  	$extendedLength_width =0;
			    $k = 0;

			    foreach($receivedArray as $value => $key){
					
			    	//to see whether the item x value is minus or larger than the canvas with
			    	
			    	$rightLength = $canvasWidth - ($key["width"] + $receivedArray[$k]["x_value"]);
			    	
			    	//you have to check the modified x value 
			    	if($receivedArray[$k]["x_value"] < 0){
			    		
			    		//if the x value of the item is minus, then adds the positive version of the value to the canvas size
			    		$canvasWidth += $receivedArray[$k]["x_value"] *-1;
			    			
			    		//adds the extended length to x value of every item
			    		$num =0;
			    		foreach($receivedArray as $array => $term){
			    			if($num !=$k){
			    				$receivedArray[$num]["x_value"] +=$receivedArray[$k]["x_value"] *-1;	
			    			}
				    		
				    		$num++;
				    	}

			    		$receivedArray[$k]["x_value"] = 0;

			    	}else if($rightLength < 0){
			    		
			    		$canvasWidth +=  ($rightLength * -1);


			    	}

			    	//to see whether the item y value is minus or larger than the canvas height
			    	$bottomLength =  $canvasHeight - ($key["height"] + $receivedArray[$k]["y_value"]);
			    	
			    	if($receivedArray[$k]["y_value"]< 0){
			    		
						$canvasHeight += $receivedArray[$k]["y_value"]*-1;
			    		
			    		$num =0;
			    		foreach($receivedArray as $array => $term){
				    		$receivedArray[$num]["y_value"] +=$receivedArray[$k]["y_value"]*-1;
				    		$num++;
				    	}

						$receivedArray[$k]["y_value"] = 0;

			    	}else if($bottomLength < 0){

			    		$canvasHeight +=($bottomLength * -1);

			    	}

			    
				    $k++;

			    }
			    
			    //determine the new canvas size and reflect the difference on x and y values of each item
				if($canvasWidth > $canvasHeight){
			    	
			    	$num =0;	
			    	$extendedLength_height = ($canvasWidth - $canvasHeight)/2;
			    	
			    	foreach($receivedArray as $array => $term){
			    		
						$receivedArray[$num]["y_value"] +=$extendedLength_height;
			    	
			    		$num++;
			    	}
			    	

			    	$canvasHeight = $canvasWidth;
			    }else if($canvasWidth < $canvasHeight){
			   		$extendedLength_width = 0;
			    	$num =0;	
			    	$extendedLength_width = ($canvasHeight - $canvasWidth)/2;
			   
			    	foreach($receivedArray as $array => $term){
			    		
						$receivedArray[$num]["x_value"] +=$extendedLength_width;
						
						$num++;
			    	}

			    	
			    	$canvasWidth = $canvasHeight;
			    }


				$canvas = new Imagick();
				$canvas->newImage($canvasWidth,$canvasHeight, new ImagickPixel('rgb(255,255,255'));
				$canvas->setImageFormat('jpg');
				
				$k = 0;
				$item = [];

				foreach($receivedArray as $value => $key){
					$item[$k] = new Imagick($key["src"]);
					
					$item[$k]->resizeImage ($key["width"],$key["height"],  imagick::FILTER_LANCZOS, 1, TRUE);
					
					if($key["flopImage"]==true){
						$item[$k]->flopImage();
					}

					$item[$k]->rotateImage(new ImagickPixel('none'),$key['angle']*180/pi());

					$canvas->compositeImage($item[$k], imagick::COMPOSITE_DEFAULT,$key["x_value"],$key["y_value"]);
					$k++;
				}

				$canvas->resizeImage (600,600,  imagick::FILTER_LANCZOS, 1, TRUE);
				

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

				$new_collage = new Collage;
				$new_collage->default_filename=$fileName;
				$new_collage->m_size_filename=$fileName_sml;
				$collage_id = $new_collage->save();


				if(isset($collage_id)){
					echo $collage_id;

					foreach($receivedArray as $value => $key){
						$product_id=(int) $key['productId'];
						$z_index=(int) $key['zIndex'];
						$x_value=(int) $key['x_value'];
						$y_value=(int) $key['y_value'];
						$width=(int) $key['width'];
						$height=(int) $key['height'];
						$angle= $key['angle'];
						if($key['flopImage']){
							$mirrored=(int) $key['flopImage'];
						}else{
							$mirrored=false;
						}
							

						$sql  = "INSERT INTO `product_collage_rel`";
						$sql .= "(`collage_id`, `product_id`, `z_index`, `x_value`, `y_value`, `width`, `height`, `angle`, `mirrored`) ";
						$sql .= "VALUES ({$collage_id},{$product_id},{$z_index},{$x_value},{$y_value},{$width},{$height},{$angle},{$mirrored})";
						$found = $database->query($sql);
					}

					if(!$found){
						$message ="Failed to save your style";
					}


				}else{
					echo $message="failed to save your style";
				}
		 	
		 	}
	 	
	 	}else{

	 		echo $message="Failed to make a style";
	 	
	 	}
	 }else{

	 	echo $message="Failed to make a style";

	 }

?>