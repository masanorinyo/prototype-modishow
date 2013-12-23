<?php

	$receivedArray = array("3","2","1","4");
	sort($receivedArray);


	$filelist=array(
		"../public/images/productItems/skirt_1.png",
		"../public/images/productItems/skirt_1.png",
		"../public/images/productItems/skirt_1.png",
		"../public/images/productItems/skirt_1.png",
		"../public/images/productItems/skirt_1.png",
		"../public/images/productItems/skirt_1.png",
		"../public/images/productItems/skirt_1.png",
		"../public/images/productItems/skirt_1.png",
		"../public/images/productItems/skirt_1.png",
		"../public/images/productItems/skirt_1.png",
		"../public/images/productItems/skirt_1.png",
		"../public/images/productItems/skirt_1.png",
		"../public/images/productItems/skirt_1.png",
		"../public/images/productItems/skirt_1.png",
		"../public/images/productItems/skirt_1.png",
		"../public/images/productItems/skirt_1.png",
	);

	$fileName = "ca"; 
	//ca stands for collage automatic
	


	foreach($receivedArray as $key){
		
		$fileName .="p".$key;
		
	}

	//add the extra information to the file name 
	//so that the file name becomes unique.

	$fileName .= ".jpg";






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

	$canvas->writeImage($fileName);
	file_put_contents($fileName, $canvas);
	
 	$canvas->destroy();
		

		




?>