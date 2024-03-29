<?php
	require_once("../../config/initialize.php");
	sort($product_id);

	$n=0;
	$filelist = [];

	foreach($product_id as $id){
		$found_product = Product::find_by_id($id);
		$filelist[$n]=SITE_ROOT.DS."resources/items/".$found_product->default_filename;
		$n++;
	}


	$fileName = "ca"; 
	//ca stands for collage automatic
	

	$k = 0;

	foreach($product_id as $key =>$value){
		
		$fileName .="p".$value;
		$k++;
	}

	//add the extra information to the file name 
	//so that the file name becomes unique.

	$fileName_sml = $fileName;
	$fileName_sml .="_sml";

 	$fileName .= ".jpg";
 	$fileName_sml .=".jpg";


	if(!empty($fileName) && !empty($fileName_sml)){
				//echo json_encode($json);	

		$found_collage = Collage::find_by_attribute($fileName,"default_filename");
		$found_collage = empty($found_collage)? false: array_shift($found_collage);
		
		if($found_collage){
			//if there is an image with the same file name, there is no need to recreate the file.
			$collage_id = $found_collage->collage_id;	

		}else{


			$canvasWidth = $canvasHeight = 600;

			$num_of_images = count($filelist);

			$num_of_columns = $num_of_rows = ceil(sqrt($num_of_images));

			//-2 = border size
			$imageWidth = $imageHeight = ($canvasWidth-2) / $num_of_rows;

			$canvas = new Imagick();
			$canvas->newImage($canvasWidth,$canvasHeight, new ImagickPixel('rgb(255,255,255'));
			$canvas->setImageFormat('jpg');
			

			$x_value =0;
			$y_value =0;
			$numOfTiles=0;
			$column = 0;
			$row = 0;
			$item=[];
			foreach($filelist as $file){
			    
			    $item[$numOfTiles] = new Imagick($file);   
			    
			 	$item[$numOfTiles]->resizeImage ($imageWidth,$imageHeight,imagick::FILTER_LANCZOS, 1, TRUE);

		 		$item[$numOfTiles]->setImageBackgroundColor('white'); 
		  
				$item[$numOfTiles]->flattenImages(); // This does not do anything. 
		 		$item[$numOfTiles] = $item[$numOfTiles]->flattenImages(); // Use this instead. 
			    $item[$numOfTiles]->frameImage("rgb(200,200,200)", 1, 1, 0, 0); 

		 
			    if($column >= $num_of_columns){
			    	$column = 0;
			    	$row++;
			    }

			  	$x_value = $column*$imageWidth;	
			    $y_value = $row*$imageHeight;
			    
			 	$canvas->compositeImage($item[$numOfTiles], imagick::COMPOSITE_DEFAULT,$x_value,$y_value);
				
				$numOfTiles++;
				$column++;
				
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

			$new_collage = new Collage;
			$new_collage->default_filename=$fileName;
			$new_collage->m_size_filename=$fileName_sml;
			$collage_id = $new_collage->save();


			if(isset($collage_id)){
				
				foreach($product_id as $id){
					$sql  = "INSERT INTO `product_collage_rel`(`collage_id`, `product_id`) ";
					$sql .= "VALUES ({$collage_id},{$id})";
					$found = $database->query($sql);
				}

				if(!$found){
					$message ="Failed to save your style";
				}


			}else{
				$message="failed to save your style";
			}

		}

	}else{

		$message="Failed to make a collage";
	
	}




?>