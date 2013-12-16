<?php

//***************************************Size information*************************************//
//Resizing
//---------------------- Original size ----------------------//
//Collage image size -> 550/ 550
//Model image size -> 550 /678
//
//---------------------- Large size ----------------------//
//Collage image size -> 475 / 475
//Model image size -> 475 /586
//Resizing
//
//---------------------- Small size ----------------------//
//Collage image size -> 300/300 -> 
//Model image size ->300/370 ->
//
//---------------------- User profile thumbnail size ----------------------//
//user profile on the poup - 72/72


//******************************************************************************************************//

class outfit_style{

	public $outfit_id;
	public $product_id;
	public $image_type; //default is main unless specified.;
	public $width;
	public $height;
	public $z_index;
	public $x_value;
	public $y_value;
	public $angle;

	public function __construct(){
		$outfitInfo = $_POST['outfit_info'];
		
	}

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


}



?>