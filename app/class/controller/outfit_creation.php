<?php

//***********************Outfit images***********************//

//--------- Original size---------//

//width/height
//Collage image size -> 600/ 600
//Model overall image size -> 600/600
//When you show the model iamge on the index.php -> crop the width
//Model size -> the whole size = 359/540
//people photo -> 600/5600


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



//*****************************************************************************//

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
	public $flopImage;

	public function __construct(){
		$outfitInfo = $_POST['outfit_info'];
		
	}

	function make_name(){

	}

	function resize(){

	}

	function composite(){

	}

	function create_canvas(){

	}

	function put_images_in_position(){

	}

	function sort_array_by_zIndex(){

	}

	function save_itemInfo(){
		//put z-index, x-value,etc into database
	}

}







?>