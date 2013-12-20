<?php

//***********************Outfit images***********************//

//--------- Original size---------//

//width/height
//Collage image size -> 586/ 586
//Model overall image size -> 586/586 
//When you show the model iamge on the index.php -> crop the width
//Model size -> 586 * 90% = 527px -> the whole size = 351/527
//people photo -> 586/586 


//--------- Large size ---------//

//Collage image size -> 475 / 475
//Model image size -> 475 /586
//people photo -> 475 /586 -> guide users to take pic of themselves in the center
//Resizing

//--------- Small size ---------//

//Collage image size -> 300/300 
//Model image size ->300/370 
//People image -> 300/370 

//***********************Original item size***********************//

//--------- item image sizes ---------//

//The main image of an item= 500/500
//items on top of model = x／700 

//--------- other image sizes ---------//

//Model = x / 700
//Background = X / 700 - x needs be larger than the height
////if users want to use the uploaded image, the image width needs to be larger than the height so let the user crop the image
//Frames = 400/400 -> can change the width and the height
//Texts = 300/300 ->can change the width and the height


//--------- User profile thumbnail size ---------//

//original profile image - 300/300
//user thumbnail - 72/72



//******************************************************************************************************//

// class outfit_style{

// 	public $outfit_id;
// 	public $product_id;
// 	public $image_type; //default is main unless specified.;
// 	public $width;
// 	public $height;
// 	public $z_index;
// 	public $x_value;
// 	public $y_value;
// 	public $angle;
// 	public $flopImage;

// 	public function __construct(){
// 		$outfitInfo = $_POST['outfit_info'];
		
// 	}

//canvas creation = constructor
//1 step name the image according to the rule
//	get the product id number first 
//	sort the product id according to the z-index
//	get the ids of items used - background, embelishments
//	sort the item id according to the z-index
//	get the id of model
//	get-rounded values (x,y,width,height,angle) from each id - if 0, then no value

//	 
//2 step check whether the created style already exists in the database
//	Determine whether the system can find the same source name of the image.
//	
//3 step = determine the width and the height of the whole canvas
//	if it is for collage creation
//		determin whether the width or the height is bigger 
//		get the value from the 1st step

//Collage automatic creation (append accoridng to the order of ids.)
//1 step = Determine the num of items
//2 step = Determine the width and heightof each item, which will change based on the num
//	<= 4 -> 225px - 2 boxes X 2 boxes
//	<= 6 -> 183.3px / 225px - 3 boxes X 2 boxes
//		the first 3 items width 
//	<= 9 -> 183.3px / 183.3px - 3 boxes X 3 boxes
//	<= 12 -> 137.5 / 183.3px - 4 boxes X 3 boxes
//	<= 16 -> 137.5 / 137.5 px - 4 boxes X 4 boxes
//3 steps = add the frames to each item.
//4 steps = append the items to the canvas.
	
//model creation
	// $receivedArray = array( 
	// 	array( 
	// 		"src" => "../public/images/items/accessory_1.png", 
	// 		"zIndex" => 1003,
	// 	),
	// 	array( 
	// 		"src" => "../public/images/items/inner_1.png", 
	// 		"zIndex" => 996,
	// 	),
	// 	array( 
	// 		"src" => "../public/images/items/jacket_1.png", 
	// 		"zIndex" => 1002,
	// 	),
	// 	array( 
	// 		"src" => "../public/images/items/shirt_1.png", 
	// 		"zIndex" => 998,
	// 	),
	// 	array( 
	// 		"src" => "../public/images/items/skirt_1.png", 
	// 		"zIndex" => 997,
	// 	)
	// );
	

	// function aasort (&$array, $key) {
 //        $sorter=array();
 //        $ret=array();
 //        reset($array);
 //        foreach ($array as $ii => $va) {
 //            $sorter[$ii]=$va[$key];
 //        }
 //        asort($sorter);
 //        foreach ($sorter as $ii => $va) {
 //            $ret[$ii]=$array[$ii];
 //        }
 //        $array=$ret;
 //    }

 //    aasort($receivedArray,"zIndex");

	
	// $canvas = new Imagick();
	// $canvas->newImage(586,586 , new ImagickPixel('none'));
	// $canvas->setImageFormat('png');
	
	// $background = new Imagick( "../public/images/embelishment/Outfit_background1.png" );
	
	// //background images need to be resized to fit the canvas 
	// $background->resizeImage ( 800, 800,  imagick::FILTER_LANCZOS, 1, TRUE);
	
	// $model = new Imagick( "../public/images/model/raw_natashaModel.png" );
	// $model->resizeImage ( 351, 527,  imagick::FILTER_LANCZOS, 1, TRUE);



	// $canvas->compositeImage( $background, imagick::COMPOSITE_DEFAULT, (((($canvas->getImageWidth()) - ($background->getImageWidth())))/2), 0 );

	// $canvas->compositeImage( $model, imagick::COMPOSITE_DEFAULT,(((($canvas->getImageWidth()) - ($model->getImageWidth())))/2),50);



	// $k = 0;
	// $item = [];
	// foreach($receivedArray as $value => $key){
	// 	$item[$k]=new Imagick($key["src"]);
	// 	$item[$k]->resizeImage (351, 527,  imagick::FILTER_LANCZOS, 1, TRUE);
	// 	$canvas->compositeImage($item[$k], imagick::COMPOSITE_DEFAULT,(((($canvas->getImageWidth()) - ($item[$k]->getImageWidth())))/2),50);
	// 	$k++;
	// }

	// header('Content-type: image/png');
	// echo $canvas;

// collage creation
	$receivedArray = array( 
		array( 
			"src" => "../public/images/productItems/skirt_1.png", 
			"zIndex" =>997,
			"width" => 300,
			"height" => 300,
			"y_value" => 0,
			"x_value" =>-400,
			"angle" =>0,
			"flopImage" => false,
		),

		array( 
			"src" => "../public/images/productItems/skirt_1.png", 
			"zIndex" => 998,
			"width" => 300,
			"height" => 300,
			"y_value" => 400,
			"x_value" => 900,
			"angle" =>-0,
			"flopImage" => false,
		),

		array( 
			"src" => "../public/images/productItems/skirt_1.png", 
			"zIndex" => 999,
			"width" => 300,
			"height" => 300,
			"y_value" => 800,
			"x_value" =>800,
			"angle" =>0,
			"flopImage" => false,
		),

		array( 
			"src" => "../public/images/productItems/skirt_1.png", 
			"zIndex" =>1000,
			"width" => 300,
			"height" => 300,
			"y_value" => 400,
			"x_value" => 400,
			"angle" =>0,
			"flopImage" => false,
		),

		
	);

	$canvasWidth = 700;
    $canvasHeight = 700;



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
	$canvas->newImage($canvasWidth,$canvasHeight, new ImagickPixel('rgb(80,80,80'));
	$canvas->setImageFormat('png');
	
	$k = 0;
	$item = [];

	foreach($receivedArray as $value => $key){
		$item[$k] = new Imagick($key["src"]);
		$item[$k]->borderImage(new ImagickPixel('red'),$key["width"],$key["height"]);
		$item[$k]->resizeImage ($key["width"],$key["height"],  imagick::FILTER_LANCZOS, 1, TRUE);
		
		if($key["flopImage"]==true){
			$item[$k]->flopImage();
		}

		$item[$k]->rotateImage(new ImagickPixel('none'),$key['angle']*180/pi());

		$canvas->compositeImage($item[$k], imagick::COMPOSITE_DEFAULT,$key["x_value"],$key["y_value"]);
		$k++;
	}

	$canvas->resizeImage (586,586,  imagick::FILTER_LANCZOS, 1, TRUE);
	

	header('Content-type: image/png');
	echo $canvas;




// // // //assign size values
// // // //1 step = get the images
// // // //2 step = assign them with specified size values

// // // //assign angle degree values
// // // //1 step = get the images
// // // //2 step = assign them with specified angle degree values

// // // //assign position values
// // // //1 step = get images
// // // //2 step = assign them with specified x and y values

// // // //layering
// // // //1 step = get images 
// // // //2 step = assign them with specified z-index


// // // //combine all images 
// // // //1 step = get images 
// // // //2 step = combine them tegether based on the canvas size
// // // //3 step = name it with each of the attribute
// // // //id of each item,model, and background + each of the z-index values + values of round(x,y,z) into 1st level + width and height. 


// // // // }



// // ?>