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

// 	public function __construct(){
// 		$outfitInfo = $_POST['outfit_info'];
		
// 	}

//canvas creation = constructor
//1 step check whether the created style already exists in the database
//	Determine whether the system can find the same source name of the image.
//	
//2 step = determine the width and the height of the whole canvas
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


$receivedArray = array( 
		array( 
			"src" => "../public/images/items/accessory_1.png", 
			"zIndex" => 1003,
		),
		array( 
			"src" => "../public/images/items/inner_1.png", 
			"zIndex" => 996,
		),
		array( 
			"src" => "../public/images/items/jacket_1.png", 
			"zIndex" => 1002,
		),
		array( 
			"src" => "../public/images/items/shirt_1.png", 
			"zIndex" => 998,
		),
		array( 
			"src" => "../public/images/items/skirt_1.png", 
			"zIndex" => 997,
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

	
	$canvas = new Imagick();
	$canvas->newImage(586,586 , new ImagickPixel('none'));
	$canvas->setImageFormat('png');
	
	$background = new Imagick( "../public/images/embelishment/Outfit_background1.png" );
	
	//background images need to be resized to fit the canvas 
	$background->resizeImage ( 800, 800,  imagick::FILTER_LANCZOS, 1, TRUE);
	
	$model = new Imagick( "../public/images/model/raw_natashaModel.png" );
	$model->resizeImage ( 351, 527,  imagick::FILTER_LANCZOS, 1, TRUE);



	$canvas->compositeImage( $background, imagick::COMPOSITE_DEFAULT, (((($canvas->getImageWidth()) - ($background->getImageWidth())))/2), 0 );

	$canvas->compositeImage( $model, imagick::COMPOSITE_DEFAULT,(((($canvas->getImageWidth()) - ($model->getImageWidth())))/2),50);



	$k = 0;
	$item = [];
	foreach($receivedArray as $value => $key){
		$item[$k]=new Imagick($key["src"]);
		$item[$k]->resizeImage (351, 527,  imagick::FILTER_LANCZOS, 1, TRUE);
		$canvas->compositeImage($item[$k], imagick::COMPOSITE_DEFAULT,(((($canvas->getImageWidth()) - ($item[$k]->getImageWidth())))/2),50);
		$k++;
	}

	header('Content-type: image/png');
	echo $canvas;




//assign size values
//1 step = get the images
//2 step = assign them with specified size values

//assign angle degree values
//1 step = get the images
//2 step = assign them with specified angle degree values

//assign position values
//1 step = get images
//2 step = assign them with specified x and y values

//layering
//1 step = get images 
//2 step = assign them with specified z-index


//combine all images 
//1 step = get images 
//2 step = combine them tegether based on the canvas size
//3 step = name it with each of the attribute
//id of each item,model, and background + each of the z-index values + values of round(x,y,z) into 1st level + width and height. 


// }



?>