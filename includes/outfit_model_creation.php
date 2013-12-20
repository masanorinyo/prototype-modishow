<?php
	
	$backgroundId = 1;
	$background_src="../public/images/embelishment/Outfit_background1.png";
	$modelId = 1;
	$model_src ="../public/images/model/raw_natashaModel.png";	
	
	$receivedArray = array( 
		array( 
			"productId"=>1,
			"item_url" => "../public/images/items/accessory_1.png", 
			"zIndex" => 1003,
		),
		array( 
			"productId"=>2,
			"item_url" => "../public/images/items/inner_1.png", 
			"zIndex" => 996,
		),
		array( 
			"productId"=>3,
			"item_url" => "../public/images/items/jacket_1.png", 
			"zIndex" => 1002,
		),
		array( 
			"productId"=>4,
			"item_url" => "../public/images/items/shirt_1.png", 
			"zIndex" => 998,
		),
		array( 
			"productId"=>5,
			"item_url" => "../public/images/items/skirt_1.png", 
			"zIndex" => 997,
		)
	);
	
	$embelishmentArray = array(
		array(
			"embelishmentId"=>1,
			"src" => "../public/images/productItems/skirt_1.png", 
			"zIndex" =>997,
			"width" => 300,
			"height" => 300,
			"y_value" => 0,
			"x_value" =>400,
			"angle" =>0,
			"flopImage" => false,
		)

	);

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
    aasort($embelishmentArray,"zIndex");

    
	$fileName = "m";
	

	//first adds each id number 
	//when the file system is searching for an image,
	//it can quickly ignore if the order of id numbers are different.
	
	foreach($receivedArray as $value => $key){
		
		$fileName .="p".$key["productId"];
		
	}
	
	$fileName .=$backgroundId;
	$fileName .=$modelId;

	if($embelishmentArray !=0){
		
		foreach($embelishmentArray as $value => $key){
		
			$fileName .="e".$key["embelishmentId"];
		
		}

		//add the extra information to the file name 
		//so that the file name becomes unique.
		foreach($embelishmentArray as $value => $key){
			
			$fileName .=round($key["x_value"],0);
			$fileName .=round($key["y_value"],0);
	

		}
	}
	
	$fileName .=".jpg";
	
	$canvas = new Imagick();
	$canvas->newImage(600,600, new ImagickPixel('none'));
	$canvas->setImageFormat('jpg');
	
	$background = new Imagick($background_src);
	
	//background images need to be resized to fit the canvas 
	$background->resizeImage ( 800, 800,  imagick::FILTER_LANCZOS, 1, TRUE);
	
	$model = new Imagick($model_src);
	$model->resizeImage (359, 540,  imagick::FILTER_LANCZOS, 1, TRUE);



	$canvas->compositeImage( $background, imagick::COMPOSITE_DEFAULT, (((($canvas->getImageWidth()) - ($background->getImageWidth())))/2), 0 );

	$canvas->compositeImage( $model, imagick::COMPOSITE_DEFAULT,(((($canvas->getImageWidth()) - ($model->getImageWidth())))/2),50);



	$k = 0;
	$item = [];
	foreach($receivedArray as $value => $key){
		$item[$k]=new Imagick($key["item_url"]);
		$item[$k]->resizeImage (359, 540,  imagick::FILTER_LANCZOS, 1, TRUE);
		$canvas->compositeImage($item[$k], imagick::COMPOSITE_DEFAULT,(((($canvas->getImageWidth()) - ($item[$k]->getImageWidth())))/2),50);
		$k++;
	}

	

	$canvas->setImageCompression(\Imagick::COMPRESSION_UNDEFINED);
	$canvas->setImageCompressionQuality(0);

	header('Content-type: image/jpg');
	$canvas->writeImage($fileName);
	file_put_contents($fileName, $canvas);



?>