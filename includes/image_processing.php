<?php

//*************************************************************************************************************************//
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

//check whether the created style already exists in the database
//1 step = determine whether the system can find the same source name of the image.

//**************************************************************************************************************//
//Properties
//width = 550;
//height = 550





//*****************************************************************************************************************//
//Collage creation
//1 step = determin whether the width or the height is bigger
//2 step = get the value from the 1st step
//3 step = determine the width and the height of the whole canvas
//4 step = get the width, height, angle, z-index of each item
//5 step = assign the values from the 5th step to each item
//6 step = get the x-value and y-value 
//7 step = assign the values from the 6th step to each item
//8 step = Put everything together
//9 step = Name it with each of the attribute - id of each item + values of round(x,y,z) into 1st level + width, and height.
//10 step = Resize it to the original size.

//Collage automatic creation


//Model creation
//1 step = get the id of the selected model and
//2 step = get the type of pose
//3 step = get the image of the model based on the id from the 1st step and the selected type of pose.
//4 step = get the id of the selected background image
//5 step = get the image based on the id from the 4th step.
//4 step = get the id of each item
//5 step = get the image type = upper, lower
//6 step = get the image of each item based on the image type.
//7 step = get the z-index of each item
//8 step = assign the z-index from the 7th step to each item
//8 step = Put everything together
//9 step = Name it with each of the attribute - id of each item,model, and background + each of the z-index values.
//9 step = Resize it to the original size.

//canvas creation
//1 step = determin whether the width or the height is bigger
//2 step = get the value from the 1st step
//3 step = determine the width and the height of the whole canvas


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


//Resizing
//1 step = get the image
//2 step = get the width and the height to resize
//3 step = resize the image based on the values from the 2nd step

//cropping
//1 step = get the image
//2 step = get the width, the height, and the position to crop
//3 step = crop the image with the value



?>