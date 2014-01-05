//********************General functions********************//
//--Click event to scroll to top--//
$(function(){
	$('#modalbox-backToTop').click(function(){
		$('#modalbox').animate({scrollTop : 0},800);
		return false;
	});
	$('.backToTop').click(function(){
		$('html, body').animate({ scrollTop: 0 }, 800);	
		return false;
	});
});

//--heart fillup--//
$(function(){
	$(".button_heart").on('click',function(event){
		if($(this).is('.broken')){
			$(".button_heart.whole > .heart_filled").hide();
			$(this).children('.heart_filled,.brokenHeart_filled').fadeToggle("fast");
		}else{
			$(".button_heart.broken > .brokenHeart_filled").hide();
			$(this).children('.heart_filled,.brokenHeart_filled').fadeToggle("fast");
		}
		
	});
	$(".button_heart_medium,.button_heart-item").on('click',function(){
		$(this).children(".mediumButton-leftside").children('.heart_filled').fadeToggle("fast");
	});
	$(".button_heart_medium,.button_heart-item").on('click',function(){
		$(this).children(".mediumButton-leftside").children('heart_filled').children(span).css('color','white');
	});
	$(".itemDetails-heart").on('click',function(){
		$(this).children().next(".heart_filled").fadeToggle("fast");
	});
	
	$("#sortable").on("click",'.itemHeart',function(event){
		$(this).children('.heart_filled').fadeToggle("fast");
	});
});


//********************Index html********************//
//------------------Slide Show--------------------//
// JavaScript Document
// Written by Chris Converse
// for Lynda.com

function openRegistrationForm(event){
	$('#registration_modalBox').fadeIn("fast");
	$('html').css("overflow", "hidden");
};


$(function(){




	// Generate Navigation links
	$('.marquee_panels .marquee_panel').each(function(index){
		$('.marquee_nav').append('<a class="marquee_nav_item" ></a>');
	});
	
	// Generate Photo Lineup
	var k=0;
	$('img.marquee_panel_photo').each(function(index){
		console.log("num of loop"+" = " + k++);
		var photoWidth = $('.marquee_container').width();
		console.log("width of photo" +" = "+ photoWidth);
		var photoPosition = index * photoWidth;
		console.log("photo position is" + " = " + photoPosition);
		$('.marquee_photos').append('<img class="marquee_photo" style="left: '+photoPosition+'; float:left" src="'+$(this).attr('src')+'" alt="'+$(this).attr('alt')+'" width='+photoWidth+' height="100%" />');
		$('.marquee_photos').css('width', photoPosition+photoWidth);
	});




	// Set up Navigation Links
	$('.marquee_nav a.marquee_nav_item').click(function(){
		
		// Set the navigation state
		$('.marquee_nav a.marquee_nav_item').removeClass('selected');
		$(this).addClass('selected');
		
		var navClicked = $(this).index();
		var marqueeWidth = $('.marquee_container').width();
		var distanceToMove = marqueeWidth*(-1);
		var newPhotoPosition = navClicked*distanceToMove + 'px';
		var newCaption = $('.marquee_panel_caption').get(navClicked);
		
		// Animate the photos and caption
		$('.marquee_photos').animate({left: newPhotoPosition}, 1000);
		$('.marquee_caption').animate({top: '440px'}, 500, function(){
			var newHTML = $(newCaption).html();
			$('.marquee_caption_content').html(newHTML);
			setCaption();
		});

	});

	



	
	// Preload all images, then initialize marquee
	$('.marquee_panels img').imgpreload(function(){
		initializeMarquee();
	});

});

function initializeMarquee(){
	$('.marquee_caption_content').html(
		$('.marquee_panels .marquee_panel:first .marquee_panel_caption').html()
	);
	$('.marquee_nav a.marquee_nav_item:first').addClass('selected');
	$('.marquee_photos').fadeIn(1500);
	setCaption();
}

function setCaption(){
	var captionHeight = $('.marquee_caption').height();
	var marqueeHeight = $('.marquee_container').height();
	var newCaptionTop = marqueeHeight - captionHeight - 15;
	$('.marquee_caption').delay(100).animate({top: newCaptionTop}, 500);
}


function imgpreload(imgs,settings)
{
	// settings = { each:Function, all:Function }
	if (settings instanceof Function) { settings = {all:settings}; }

	// use of typeof required
	// https://developer.mozilla.org/En/Core_JavaScript_1.5_Reference/Operators/Special_Operators/Instanceof_Operator#Description
	if (typeof imgs == "string") { imgs = [imgs]; }

	var loaded = [];
	var t = imgs.length;
	var i = 0;

	for (i; i<t; i++)
	{
		var img = new Image();
		img.onload = function()
		{
			loaded.push(this);
			if (settings.each instanceof Function) { settings.each.call(this); }
			if (loaded.length>=t && settings.all instanceof Function) { settings.all.call(loaded); }
		};
		img.src = imgs[i];

		console.log(i+" = "+img.src);
	}
}

if (typeof jQuery != "undefined")
{
	(function($){

		// extend jquery (because i love jQuery)
		$.imgpreload = imgpreload;

		// public
		$.fn.imgpreload = function(settings)
		{
			settings = $.extend({},$.fn.imgpreload.defaults,(settings instanceof Function)?{all:settings}:settings);

			this.each(function()
			{
				var elem = this;

				imgpreload($(this).attr('src'),function()
				{
					if (settings.each instanceof Function) { settings.each.call(elem); }
				});
			});

			// declare urls and loop here (loop a second time) to prevent
			// pollution of above closure with unnecessary variables

			var urls = [];

			this.each(function()
			{
				urls.push($(this).attr('src'));
			});

			var selection = this;

			imgpreload(urls,function()
			{
				if (settings.all instanceof Function) { settings.all.call(selection); }
			});

			return this;
		};

		// public
		$.fn.imgpreload.defaults =
		{
			each: null // callback invoked when each image in a group loads
			, all: null // callback invoked when when the entire group of images has loaded
		};

	})(jQuery);
}


//---------------------Modal box---------------------//
//--Open and close modal box--//
$(function(){
	$('.openModal').click(function(event){
		$('#popup_overlay').show();
	});
	$('.openModal,.singleItemImage,.editIcon,.userProfile > div > div, .editIcon,.jumpToSignup').click(function(event){
		$('html').css("overflow", "hidden");
	});

	$('.openModal').click(function(event){
		$('.backToTop').css("display", "none");
	});
	
	$('.openModal').click(function(event){
		$('#modalbox').scrollTop(0);
	});
	$("#modalbox").click(function(event){
		$('#popup_overlay').hide();
	});	
	$('.closeBox').click(function(event){
		$('#popup_overlay').hide();
	});
	$('.closeBox,.icon_close,.confirmation .cancel').click(function(event){
		$('html').css("overflow","visible"); 
	});
	$('#modalbox,#modalbox-quick,#modalbox-editProfile,#modalbox-changePic,#signup_modalBox').click(function(event){
		//if users did not choose either options in the more information popup and clicked the outside box
		if($('#signup .popup-box.moreInformatin').is(':visible')){
			return false;
			
		}else{
			$('html').css("overflow","visible"); 
		};
	});

	$('#modalbox').click(function(event){
		$('.backToTop').css("display", "none");
	});
	$('#modalbox').click(function(event){
		$('#modalbox-backToTop').css("display", "none");
	});
	$('.preventClose_modalBox').click(function(event){
		event.stopPropagation();
	});
});

//--back to top button--//
$(function(){
	$(window).scroll(function(){
		if ($(this).scrollTop() < 850) {
			$('.backToTop').fadeOut(300);
		} else {
			$('.backToTop').fadeIn(300);
		}
	});
	$("#modalbox").scroll(function(){
		if ($(this).scrollTop() < 850) {
			$('#modalbox-backToTop').fadeOut(300);
		} else {
			$('#modalbox-backToTop').fadeIn(300);
		}
	});
});

//--about display show button--//
$(function(){
	$(".button_about").click(function(){
		$("#footer").css("position","fixed").fadeToggle(300);       
 	});
 });

//--header fix position--//
$(function(){
    $('#modalbox').scroll(function(){
        var scrollTop = 30;
        
        if($('#modalbox').scrollTop() >= scrollTop){
            $('#mainContainer_header').css({
                position : 'fixed',
                top : '0',
            });
        };

        if($('#modalbox').scrollTop() < scrollTop){
            $('#mainContainer_header').removeAttr('style'); 
        };
    });
});

//--change among three options - collage, model, people--//
$(function(){
	$(".rectanglar-left").click(function(){
		if( $(".content_model,.content_people").css("display","block") ) {
            $(".content_model,.content_people").hide();
            $(".rectanglar-medium,.rectanglar-right").removeClass("currently_focus");
        };
		$(".content_collage").show();       
		$(".rectanglar-left").addClass("currently_focus");
 	});

	$(".rectanglar-medium").click(function(){
		if( $(".content_collage,.content_people").css("display","block") ) {
            $(".content_collage,.content_people").hide();
            $(".rectanglar-right,.rectanglar-left").removeClass("currently_focus");
    	};
		$(".content_model").show();
		$(".rectanglar-medium").addClass("currently_focus");
    });
	
	$(".rectanglar-right").click(function(){
		if( $(".content_model,.content_collage").css("display","block") ) {
            $(".content_model,.content_collage").hide();};
           $(".rectanglar-left,.rectanglar-medium").removeClass("currently_focus");     
		$(".content_people").show();       
		$(".rectanglar-right").addClass("currently_focus");
	});
});

//--direct contents to the modal box content--//
//if collage contents are clicked, the collage will be shown in the modal box at first//
$(function(){
   	$(".collageBox,.styleTitle > .openModal,.medium_boxes .openModal,.follow .openModal").click(function(){
		$(".rectanglar-left").addClass("currently_focus");
    	$(".rectanglar-medium,.rectanglar-right").removeClass("currently_focus");
    	$(".content_model,.content_people").hide();    
    	$(".content_collage").show();       
	 });

	$(".modelBox").click(function(){
		$(".rectanglar-medium").addClass("currently_focus");
    	$(".rectanglar-left,.rectanglar-right").removeClass("currently_focus");
    	$(".content_collage,.content_people").hide();    
    	$(".content_model").show();       
 	});
	$(".peopleBox").click(function(){
		$(".rectanglar-right").addClass("currently_focus");
    	$(".rectanglar-left,.rectanglar-medium").removeClass("currently_focus");
    	$(".content_collage,.content_model").hide();    
    	$(".content_people").show();       
 	});
});

//---------------------Contents ---------------------//
//--hover effect for contents--//
$(function(){
	$(".content_small,.content_large,.items > li,.small_boxes > ul > li,.medium_boxes > ul > li,.large_boxes,#content > div > div > ul > li").hover(function(){
		$(this).children(".button_heart,.button_flip").fadeIn("fast");},function(){
		$(this).children(".button_heart,.button_flip").fadeOut("fast");
	});
});

//--flip individual effect--//
$(function(){
	$('.button_flip').on("click", function(){
  		var modelImage = $(this).next().next(".modelBox");
  		var collageImage = $(this).next(".collageBox");

	  if(collageImage.css('display') == "block"){
	     collageImage.fadeOut();
	     modelImage.fadeIn();
	     $(this).next().next().next().next().children().children().next().children().next('.styleCategory').fadeOut();
	     $(this).next().next().next().next().children().children(".styleTitle").fadeOut();
	  } else{
	     modelImage.fadeOut();
	     collageImage.fadeIn();
	     $(this).next().next().next().next().children().children().next().children().next('.styleCategory').fadeIn();
	    $(this).next().next().next().next().children().children(".styleTitle").fadeIn();
	  };	  
	});
});

//--flip all effect--//
$(function(){
	$('#button_flipAll').on("click", function(){
		if($(".modelBox").css("display") == "block"){
			$(".modelBox").fadeOut();
			$(".collageBox,.styleTitle,.styleCategory").fadeIn();
		}else if($(".collageBox").css("display") == "block"){
			$(".collageBox,.styleTitle,.styleCategory").fadeOut();
			$(".modelBox").fadeIn();
		};
	});
});


//---------------------Sticky navi---------------------//
//--hover effect for sticky navi--//
$(function(){
	$(".stickynavi_submenu > div").hover(function(){
		$(this).children(".background_white.stickynavi_submenu_second").fadeIn("fast");},function(){
		$(this).children(".background_white.stickynavi_submenu_second").fadeOut("fast");
	});
	$(".stickynavi_submenu").children().children().hover(function(){
		$(this).children(".stickynavi_submenu_second").fadeIn("fast");},function(){
		$(this).children(".stickynavi_submenu_second").hide();
	});
});

//--sticky navi fix navi--//
$(function(){
    $(window).scroll(function(){
        var scrollTop = 50;
        
        if($(window).scrollTop() >= scrollTop){
            $('#stickynavi_wrapper').css({
                position : 'fixed',
                top : '0',
            });
        }

        if($(window).scrollTop() < scrollTop){
            $('#stickynavi_wrapper').removeAttr('style'); 
        }
    })
});


//--search box appears--// 
$(function(){
    $(window).scroll(function(){
        var scrollTop = 50;
        if($(window).scrollTop() >= scrollTop){
            $('#stickynavi_searchBox').fadeIn("fast");
        }

        if($(window).scrollTop() < scrollTop){
            $('#stickynavi_searchBox').fadeOut("fast"); 
        }
    })
})

//--sign up box appears--// 
$(function(){
    $(window).scroll(function(){
        var scrollTop = 550;
        if($(window).scrollTop() >= scrollTop){
            $('#signupBox').fadeIn("fast");
        }
		
		 if($(window).scrollTop() < scrollTop){
            $('#signupBox').fadeOut("fast"); 
        }
    })
})

//--dropdown menu--//
$(function(){
	$(".stickynavi-left > li").click(function(){
		$(this).children('.stickynavi_submenu').fadeToggle("fast");});			
	
	$(".stickynavi-left > li").click(function() {
	    if( $(this).children(".stickynavi_submenu").is("display","block") ) {
	        $(this).children(".stickynavi_submenu").hide();
	    } else {
	        // if other menus are open remove open class and add closed
	        $(this).siblings().children(".stickynavi_submenu").is("display","block"); 
	        $(this).siblings().children(".stickynavi_submenu").hide();
	    }
	});

	$('html').click(function(event){
             $('.stickynavi_submenu').hide();
         });

	$('.stickynavi-left > li, #stickynavi_filter .stickynavi_submenu_second, #stickynavi_creator .stickynavi_submenu_second, #stickynavi_location input[type="text"],#stickynavi_location select').click(function(event){
			event.stopPropagation();
	});	
});

//--------the stickynavi menu changes based on the selected option----------//
$(function(){
	$("#stickynavi_category .stickynavi_submenu_second li").click(function(){
		var selectedSubCategory = $(this).text();
		$("#stickynavi_category .stickynavi_list").text(selectedSubCategory);
	});
	$("#stickynavi_category .stickynavi_submenu a li").click(function(){
		var selectedCategory = $(this).text();
		$("#stickynavi_category .stickynavi_list").text(selectedCategory);
	});
	$("#stickynavi_order .stickynavi_submenu_second li").click(function(){
		var selectedSubCategory = $(this).text();
		var parentCategory = $(this).parent().parent().parent().prev().prev().text();
		var titleString = parentCategory + " : " + selectedSubCategory;
		$("#stickynavi_order .stickynavi_list").text(titleString);
	});
	$("#stickynavi_order .stickynavi_submenu > a > li").click(function(){
		var selectedOrderCategory = $(this).text();
		$("#stickynavi_order .stickynavi_list").text(selectedOrderCategory);
	});

	$("#stickynavi_location form").submit(function(e){
		var selectedCountry = $("#stickynavi_location select option:selected").text();
		
		$("#stickynavi_location .stickynavi_list").text(selectedCountry);
		
		return false;
	});
});


//********************Tryon html********************//
//-----------------left side ----------------//
//--hover effect--//
$(function(){
	$("#creationCanvas").hover(function(){
		$(".hide").fadeIn("fast");},function(){
		$(".hide").fadeOut("fast");
	});
});

//--appears & disappears for category and layer button--//
$(function(){
	$(".button_category,.button_layer").click(function(){
    	if( $(this).children(".hiddenBox").is("display","block")){
        	$(this).children(".hiddenBox").hide();
    	} else {
	        // if other menus are open remove open class and add closed
	        $(this).siblings().children(".hiddenBox").is("display","block"); 
	        $(this).siblings().children(".hiddenBox").hide();
	    }

        $(this).children(".hiddenBox").fadeToggle("fast");
    });

	$(".openLayer").click(function(){
		if($(".button_layer .hiddenBox").is(":visible")){
			$(".dragAndDropGuide").fadeOut("fast");
		}else{
			$(".dragAndDropGuide").fadeIn("fast");
		}
	});

	$(".button_layer").click(function(){
		$(".dragAndDropGuide").fadeToggle("fast");
	});

	$(".openLayer").click(function(){
        if( $(".button_layer > .hiddenBox").is("display","block")){
        	$(".button_layer > .hiddenBox").hide();
        } else {
        // if other menus are open remove open class and add closed
        	$(".button_category > .hiddenBox").is("display","block"); 
            $(".button_category > .hiddenBox").hide();   
    	}
        $(".button_layer > .hiddenBox").fadeToggle("fast");
    });

	$('html').click(function(event){
        $('.hiddenBox').hide();
        $(".dragAndDropGuide").hide();
    });
	
	$('.button_category,.button_layer,.openLayer,.hiddenBox').click(function(event){
		event.stopPropagation();
	});
});

//------------------- outfit creation layering ----------------//
$(function(){
	
//tryon creation
	var itemWrapper = '';
	//for hold icon
	itemWrapper += '<li class="layers">';//if the list position changed, the above will change to either middle or below
	itemWrapper += '<div class="holdIconBox"><div class="holdIcon">&Xi;</div></div>';
	itemWrapper += '<span class="removeIcon">&#10006;</span>';
	//item image - should be inserted by the item box image
	itemWrapper += '<div class="imageIconBox"><a href="#"></a></div>';
	itemWrapper += '<div class="itemDescriptionBox">';
	//product name - should be downlaoded from the server
	itemWrapper += '<div class="titleOfProduct"></div>';
	//for vendor's site - should be downlaoded from the server
	itemWrapper += '<div class="url"></div>';
	//for price - should be downlaoded from the server
	itemWrapper += '<div class="price"></div>';
	//for heart button - should be downlaoded from the server
	itemWrapper += '<div class="itemHeart"><div class="heart_empty"></div><div class="heart_filled"></div></div>';
	itemWrapper += '</div>';
	itemWrapper += '</li>';

	//constructor for an outfit -> attaching each attribute info onto the newly created outfit
	function outfitStyle(id,className, title,url,price,smallImg,image_above,layer,itemCategory){
	    this.idNum = id;
	    this.class_name=className;
	    this.titleInfo = title;
	    this.urlInfo = url;
	    this.priceInfo = price;
		this.smallImageInfo = smallImg;
		this.largeImageInfo_above = image_above;
		this.layerWrapper = layer;

	}		


	outfitStyle.prototype.createItemList = function(){
		//highlight the layer box to show it receives a new item
		$(".button_layer").effect("highlight",{color: 'rgb(140,220,200)'},"fast");

		//re-read the newly created item wrapper 
		var wrapper = $.parseHTML(this.layerWrapper);
		var flagForOutwear = 0;


		
		//assign the same id as selected image to the whole list wrapper
		$(wrapper).attr('id',this.idNum);
		$(wrapper).addClass(this.class_name);
		$(wrapper).find(".imageIconBox").children("a").append(this.smallImageInfo);
		$(wrapper).find(".titleOfProduct").append(this.titleInfo);
		$(wrapper).find(".url").append(this.urlInfo);
		$(wrapper).find(".price").append(this.priceInfo);
	
	



		if($("#sortable li").is(".vest")){
			$(wrapper).insertAfter("#sortable > .vest");
		}else if($("#sortable li").is(".jacket")){
			$(wrapper).insertAfter("#sortable > .jacket");
		}else if($("#sortable li").is(".coat")){
			$(wrapper).insertAfter("#sortable > .coat");
		}else{
			$("#sortable").prepend(wrapper);
		}


		//outfit order comes - other clothes will be below a newly selected image
		//outwear is always on the top = z-index:1002
		//jacket is always on the top unless any outwear selected = z-index:1001
		$("#tryclothes #outfitItems").append(this.largeImageInfo_above);

		
		$('.removeIcon').click(function(event){
			$(this).parent().remove();
			var sameId = $(this).parent().attr('id');
			var outfit_image_id = parseInt(sameId);
			var parentList = $("#outfitItems").find('#'+outfit_image_id).parent();
			$("#outfitItems").find('#'+outfit_image_id).remove();
			
		});
	}

	function filterDuplicate(event,outfit,id,className, title,url,price,sImage,image_above,itemWrapper,subImgName,selectedItems,topPosition,leftPosition){
   		//this prevents duplicate item selection.
		var alreadySelected = 0;
		var layerItems =$(".layers");

		var replacableItems = ".jacket,.coat,.vest,.shoes,.swimwear,.jumpsuits,.shorts";
			replacableItems +=",.pants,.jeans,.dresses,.skirt,.bras,.camisoles,.chemiss,.hosiery";
			replacableItems +=",.sleepwear,.panties,.robes,.legwear";


		//if there is no single selected items, first create one
   		if($(".layers").length == 0){
   			//if the item image was selected on the collage creation page
	   		if($(event).parent().is(".collageCanvas")){
	   			var collage = new collageStyle(id, title,url,price,sImage,itemWrapper,subImgName,selectedItems,topPosition,leftPosition);
	   			console.log(collage);
	   			pushBackItems();
	   			collage.createItemList(collage.topPosition,collage.leftPosition);
	   			collage.adding();
	   			
	   		}else{
	   		//if it was selected on the tryon page
				outfit.createItemList();
	   			changeImageType();
			}

   		}else{
   			//check to see if the item is already selected
			for(var i=0 ;i < $(".layers").length;i++){
				if(outfit.idNum == $(layerItems[i]).find("img").attr('id')){
					alreadySelected = 1;
				};
			};

			//if there is no selected items in the list, add it
			if(alreadySelected == 0){
				if($(event).parent().is(".collageCanvas")){
		   			var collage = new collageStyle(id, title,url,price,sImage,itemWrapper,subImgName,selectedItems,topPosition,leftPosition);
	   				console.log(collage);
	   				pushBackItems();
	   				collage.createItemList(collage.topPosition,collage.leftPosition);
	   				collage.adding();
	   			
		   		}else if($(image_above).is(replacableItems)){
	   			//if the selected item is among replacable items
	   				
	   				//if there are already replacable items in the list, remove them.
	   				if($("#tryclothes #outfitItems > img").is(replacableItems)){
	   					$("#tryclothes #outfitItems ."+className).remove();
	   					$("#tryclothes #sortable ."+className).remove();	
	   				}

	   				outfit.createItemList();
	   				changeImageType();
	   				
				
				}else{
		   		//if it was selected on the tryon page
					outfit.createItemList();
	   				changeImageType();
				}

			}else{
			
				return false;
			
			};
   		};
	};

	function getDegreesRotation(obj) {
	    if(obj[0].style['-webkit-transform'] !== undefined) {
	        return obj[0].style['-webkit-transform'].substr(7, obj[0].style['-webkit-transform'].length - 11);
	    } else if(obj[0].style['-moz-transform'] !== undefined) {
	        return obj[0].style['-moz-transform'].substr(7, obj[0].style['-webkit-transform'].length - 11);
	    } else if(obj[0].style['-ms-transform'] !== undefined) {
	        return obj[0].style['-ms-transform'].substr(7, obj[0].style['-webkit-transform'].length - 11);
	    } else if(obj[0].style['-o-transform'] !== undefined) {
	        return obj[0].style['-o-transform'].substr(7, obj[0].style['-webkit-transform'].length - 11);
	    } else if(obj[0].style['transform'] !== undefined) {
	        return obj[0].style['transform'].substr(7, obj[0].style['-webkit-transform'].length - 11);
	    } else{ return 0; }
	}


	function changeImageType(callForAboveImage){
	   		$("#tryclothes .layers").each(function(){
	   			
	   			var image_id = $(this).attr("id");
	   			var image_class = $(this).attr("class");
	   			var itemCategory = $(this).find("img").attr("class").split(" ")[0];
	   			var image_type = "above";
	   			var originalClothesOnTop_index = $(".layers:not('.accessory')").first().index();

	   			var zIndexOfItem = $("#outfitItems #"+image_id).css("z-index");
	   			if($(this).index() > originalClothesOnTop_index){
	   				//if the current list index is above the first list, exluding accessories
	   				if($(this).is(".top") && $(this).index() < $("#sortable").children(".pants,.shorts,.jeans,.skirt").first().index()){
	   					image_type="middle";//for tops above pants, skirts, etc.
	   				}else if($(this).is(".pants,.jeans,.skirt,.shorts")){
	   					if($(this).index() > $(".affectBottom").index()){
	   						//if there is any clotehs that affect the visuality of the bottom
	   						image_type = "below";
	   					}else{//if there is no clothes affecting the visuality of the bottom
	   						image_type = "middle";
	   					}
	   				}else if($(this).is(".accessory")){
	   					//if the accessory is skirf and is moved below other clothes
	   					if($(this).is(".skirf")){
	   						image_type="below";
	   					}
	   				}else{
	   					image_type = "below";
					}

	   			}

	   			console.log(image_type+" and "+ itemCategory);
	   			
	   			//callForAboveImage -> if the function is called from manually changing layers
	   // 			if(callForAboveImage==1){
	   // 				// if the position class (above,middle,below) changes, then call for a new image
	   // 				if($("#outfitItems #"+image_id).attr("class").split(" ")[1] !== image_type){
	   // 					$.ajax({
	   // 						type:"POST",
	   // 						url:"../includes/product",
	   // 						data:{productID:image_id, imageType:image_type,zIndex:zIndexOfItem,itemCate:itemCategory},
	   // 						//before data is successfully stored, the canvas gets darken.
	   // 						beforeSend: function(){
	   // 							$("#creationCanvas").append("<div id='darkenDiv'></div>");
	   // 							$("#darkenDiv").fadeIn("slow");
	   // 						},
	   // 						//assign each item with imageType class = classes of above, middle, and below.
	   // 						success:function(data){
	   // 							$("#tryclothes #outfitItems #"+image_id).replaceWith(data);
	   // 							$("#darkenDiv").fadeOut("slow");
	   // 							//add class "alreadyCalled" in order to prevent multiple ajax call
	   // 						},
	   // 						fail:function(){
	   // 							alert("server request; failed");
	   // 						}
	   // 					});
	   // 				}
				// }else if(image_type !== "above"){
				// 	if(!$("#tryclothes #outfitItems #"+image_id).is(".alreadyCalled")){
				// 		// check whether if this image is already called by ajax
						
	   // 					$.ajax({
	   // 						type:"POST",
	   // 						url:"../includes/product.php",
	   // 						data:{productID:image_id, imageType:image_type,zIndex:zIndexOfItem,itemCate:itemCategory},
	   // 						//before data is successfully stored, the canvas gets darken.
	   // 						beforeSend: function(){
	   // 							$("#creationCanvas").append("<div id='darkenDiv'></div>");
	   // 							$("#darkenDiv").fadeIn("slow");
	   // 						},
	   // 						//assign each item with imageType class = classes of above, middle, and below.
	   // 						success:function(data){
	   // 							$("#tryclothes #outfitItems #"+image_id).replaceWith(data);
	   // 							//add class "alreadyCalled" in order to prevent multiple ajax call
	   // 							$("#darkenDiv").fadeOut("slow");
	   // 						},
	   // 						fail:function(){
	   // 							alert("server request; failed");
	   // 						}
	   // 					});
				// 	}
   	// 			}

	   		});
		}

//remove the selected layer

	var sortableIn = 1;
	$("#sortable" ).sortable({
		distance:15,
		scroll: true, 
		scrollSensitivity: 100,
		scrollSpeed:10,

		//when the last items in the sortable list is dragged out,
		//it will begin from the bottom scroll position.
		start:function(event,ui){
			var bottomIndex = $(".layers").length-1;
			var selectedIndex = $(ui.item).index()+1;
			if(selectedIndex==bottomIndex){
				
				$('#sortable').scrollTop($('#sortable')[0].scrollHeight);
			
			}
		},
		
		
		update:function(event,ui){
			
			var selectedItem = ui.item;
			var firstListItem_index = $("#sortable > li:not('.accessory')").first().index();
			//only accessory can go above the jacket,vest,and coat
			
				
			
			if($(selectedItem).parent().is(".tryon_list") && !$(selectedItem).is(".accessory,.coat,.jacket,.vest")){
				
				//if the selected item is not an accessory, a jacket, a coat, or a vest.
				if(selectedItem.index() <= $("#sortable > .jacket,#sortable > .vest,#sortable > .coat").index()){
					$(this).sortable('cancel');
					alert("You can only put accessories above jacket,vest, and coat");
				}

			}

			//moving jacket,vest, and coat around
			if($(selectedItem).parent().is(".tryon_list") && $(selectedItem).is(".vest")){

				//if the selected item is a vest, it needs to be below coat and jacket
				if(selectedItem.index() <= $("#sortable > .jacket,#sortable > .coat").index()){
					$(this).sortable('cancel');
					alert("You cannot put vest above jacket or coat");
				}else if(selectedItem.index() > firstListItem_index){
					$(this).sortable('cancel');
					alert("You can only put accessories above jacket,vest, and coat");	
				}

			}else if($(selectedItem).parent().is(".tryon_list") && $(selectedItem).is(".jacket")){
				
				//if the selected item is a vest, it needs to be below coat and above vest
				if(selectedItem.index() <= $("#sortable > .coat").index()){
					$(this).sortable('cancel');
					alert("You cannot put jacket above coat");
				}else if(selectedItem.index() >= $("#sortable > .vest").index() && $("#sortable > li").is(".vest")){
					$(this).sortable('cancel');
					console.log($("#sortable > .vest").index());
					alert("You cannot put jacket below vest");
				}else if(selectedItem.index() > firstListItem_index){
					$(this).sortable('cancel');
					alert("You can only put accessories above jacket,vest, and coat");	
				}

			}else if($(selectedItem).parent().is(".tryon_list") && $(selectedItem).is(".coat")){
				
				//if the selected item is a vest, it needs to be above jacket and vest
				if(selectedItem.index() >= $("#sortable > .jacket,#sortable > .vest").index()){
					$(this).sortable('cancel');
					alert("You cannot put coat below vest or jacket");
				}else if(selectedItem.index() > firstListItem_index){
					$(this).sortable('cancel');
					alert("You can only put accessories above jacket,vest, and coat");	
				}
			}
			
		},
		stop: function(event, ui) {
			sortableIn = 1;
			var selected = $(ui.item);
			var selected_position = $(ui.item).index();
			
			$(selected).css({
				border:"1px solid rgb(200,200,200)",
				backgroundColor:"rgb(34,34,34)",
			});

			var numOfDynamicVariables = 0;
			var numOfItems　= 0;

			//change the z-index of every itemBox	
			for(var k=0;k < $('.layers').length;k++){
				var loop = 0;
				var itemArray = $('.layers');
				var itemId = $(itemArray[k]).attr('id');
				var itemId = parseInt(itemId);
				var itemClass = $(itemArray[k]).attr('class');
				var thisLoopItem = $("#collage #outfitItems #"+itemId);
				
				if(!$(itemArray[k]).is(".jacket,.vest,.coat,.accessory")){
					//prevent jacket,coat, vest to be assigned with z-index value
					$("#tryclothes #outfitItems").find('#'+itemId).css('z-index',1000-k);
				}else if($(itemArray[k]).is(".accessory")){
					if($(".layers").is(".vest") && $(".layers.accessory").index() < $(".layers.vest").index()){
						$("#tryclothes #outfitItems").find('#'+itemId).css('z-index',1003);
					}else if($(".layers").is(".jacket") && $(".layers.accessory").index() < $(".layers.jacket").index()){
						$("#tryclothes #outfitItems").find('#'+itemId).css('z-index',1005);
					}else if($(".layers").is(".coat") && $(".layers.accessory").index() < $(".layers.coat").index()){
						$("#tryclothes #outfitItems").find('#'+itemId).css('z-index',1007);
					}else{
						$("#tryclothes #outfitItems").find('#'+itemId).css('z-index',1000-k);
					}
				}

				
				//this counts the num of cloned items so that the position will be in order
				
				
				numOfItems = parseInt(k+numOfDynamicVariables);
				var numOfClones = 0;
				
			
				
				if($(thisLoopItem).parents('li').is('.clonedItem')){
					var cloneArray = $('.clonedItem #'+itemId);
					console.log("Number of items :"+numOfItems);
					$(cloneArray).each(function(){
						$(this).parent().css("z-index",parseInt(1000-numOfClones-numOfItems));
						//to keep adding the clone num = static variable
						
						numOfClones++;

						
					});
					
					numOfDynamicVariables += numOfClones-1;
					console.log("total numbers :"+numOfDynamicVariables);
					
				}else{
					$(thisLoopItem).parent().css('z-index',parseInt(1000-numOfItems));
					console.log("total numbers without clones :"+numOfDynamicVariables);
				}

				$("#outfitItems > li").each(function(){
					console.log($(this).css("z-index"));
				});
				
				
				
				

				
			};


			changeImageType(1);
			
		},

		over:function(event,ui){
			sortableIn = 1;
			ui.item.css({
				border:"1px solid rgb(200,200,200)",
				backgroundColor:"rgb(34,34,34)",
			});
		},

		out:function(event,ui){
			sortableIn = 0;
			ui.item.css({
				border:"2px solid rgb(190,80,80)",
				backgroundColor:"rgb(80,50,50)",
			});
		},
		
		//beforeStop to remove items and maintain a sentinel based on the over and out to determine whether or not you've moved outside the bounds of the container.
        beforeStop: function (event, ui,target){
            if(sortableIn == 0){ 
            	ui.item.remove();

				var sameId = ui.item.attr('id');
				var outfit_image_id = parseInt(sameId);
				
				var parentList = $("#collage #outfitItems #"+outfit_image_id).parent();
				var itemArray = $("#outfitItems #"+outfit_image_id);					

				console.log("image length:"+itemArray.length + "" + "parent length:" + parentList.length);

				for(var i=0;i<itemArray.length; i++){
					$(itemArray[i]).remove();
					$(parentList[i]).remove();
				};
				
				console.log($(".layers").length);


           		if($(".layers").length == 1){
       				$(".background_grid").show();
       			}

           };



           
        }
	});
    
    $("#sortable").disableSelection();

    //push back the images already on the canvas
    function pushBackItems (){
    	$("#collage #outfitItems > li").each(function(){
			var current_zindex = $(this).css("z-index")-1;
			$(this).css("z-index",current_zindex);
		});
    }

//event handler
	$('.itemBoxImages').on("click",".items-wrapper",function(event){	
   		//take ID information here & get multiple images for different positions
   		//image for being on top of the other clothes
   		//image for being underneath the other clothes
   		
   		var id = $(this).children('img').attr('id');
   		var int_id = parseInt(id);
   		var className = $(this).children('img').attr('class');
   		var sImage = $(this).children('img').clone();
   		var image_above = $.parseHTML("<img />");
		$(image_above).addClass('above');
   		$(image_above).attr('id',int_id);
   		
   		$.ajax({
   			type:"POST",
   			dataType: "json",
   			url:"../app/class/controller/style_creation",
   			data:{product_id:id},
   			success:function(data){

   				
				var title = "<a href=''>"+data.name+"</a>"; //Ajax call
   				if(data.url){
   					var url = "<a href='#'>"+data.url+"</a>"; //Ajax call	
   				}
   				if(data.price){
   					var price = data.price;//Ajax call		
   				}
				
				if(data.acf){

					 $(image_above).attr("src",data.above_close_front);

				}else if(data.acb){

					 $(image_above).attr("src",data.above_close_back);

				}else if(data.aof){

					 $(image_above).attr("src",data.above_open_front);

				}else if(data.aob){

					$(image_above).attr("src",data.above_open_back);

				}else if(data.af){

					$(image_above).attr("src",data.above_front);

				}else if(data.ab){

					$(image_above).attr("src",data.above_back);

				}else if(data.drsf){

					$(image_above).attr("src",data.default_right_shoulder_front);

				}else if(data.drsb){

					$(image_above).attr("src",data.default_right_shoulder_back);

				}else if(data.rsf){

					$(image_above).attr("src",data.right_shoulder_front);

				}else if(data.rsb){

					$(image_above).attr("src",data.right_shoulder_back);

				}else if(data.drhf){

					$(image_above).attr("src",data.default_right_hand_front);

				}else if(data.drhb){

					$(image_above).attr("src",data.default_right_hand_back);

				}else if(data.df){
					$(image_above).attr("src",data.default_front);
				}else if(data.db){
					$(image_above).attr("src",data.default_back);
				}else if(data.f){
					$(image_above).attr("src",data.front);
				}else if(data.b){
					$(image_above).attr("src", data.back);
				}

				

		   		
		   		 //to show items on the list(sortable) box
		   		var selectedItem = $(this).children('img').clone();//Ajax call for a larger image - collage creation
				var subImgName = $(this).children('img').attr('src');// use regular expression to extract only the image name
		   		
		   		
		   		
				


				

		   		var outfit = new outfitStyle(id, className,title,url,price,sImage,image_above,itemWrapper);


		   		filterDuplicate($(this),outfit,id,className, title,url,price,sImage,image_above,itemWrapper,subImgName,selectedItem);

		   		
		   		$(".background_grid").hide();

				
				
   			},
   			error:function(){
   				alert("something weng wrong");
   			}


   		})
		
		

	});


//event handler
	$(".itemBoxImages .items-wrapper").draggable({ 
		distance:100,
		appendTo: "body",
		cursor: "move", 	
		zIndex: 2000,	
		helper:function(event,ui){
			var cloneList = $(this).clone();
			$(cloneList).find("img").addClass('addStyleListBox');

			return cloneList;
		}

		
	});


	$("#creationCanvas").droppable({
		accept:".items-wrapper",
		drop:function(event,ui){
			var id = $(ui.draggable).children('img').attr('id');
			var className = $(ui.draggable).children('img').attr('class');
	   		var title = "<a href='item.html'>test</a>"; //Ajax call
	   		var url = "<a href='#''>test.html</a>"; //Ajax call
	   		var price = "$30";//Ajax call
	   		var sImage = $(ui.draggable).children('img').clone(); //to show items on the list box and the item box
	   		var image_above = $(ui.draggable).children('img').clone(); //Ajax call - goes onto the model		
	   		$(image_above).addClass('above');//the newly selected item is always on top of others
	   		var subImgName = $(ui.draggable).children('img').attr('src');// use regular expression to extract only the image name
			var selectedItem = $(ui.draggable).children('img').clone();//selected sub-images
	   	
			
		
			droppableOffset =  $('#creationCanvas').offset();
			console.log("droppable is "+droppableOffset.top);
	        topPosition = ui.position.top - droppableOffset.top;
	        leftPosition = ui.position.left - droppableOffset.left;
			


	   		var outfit = new outfitStyle(id, className,title,url,price,sImage,image_above,itemWrapper);
	   		filterDuplicate($(ui.draggable),outfit,id,className, title,url,price,sImage,image_above,itemWrapper,subImgName,selectedItem, topPosition,leftPosition);
			

			//get rid of the grid when items are on the canvas
			$(".background_grid").hide();

		}
	});

	
	



//Collage creation	
//sub class of the outfitStyle class - there are duplicate codes - learn how to inherit properties from parent class
	function collageStyle(id, title,url,price,smallImg,layer,subName,selectedItem,top_pos,left_pos){
	 	this.idNum = id;
	    this.titleInfo = title;
	    this.urlInfo = url;
	    this.priceInfo = price;
		this.smallImageInfo = smallImg;
		this.layerWrapper = layer;
	 	this.subImageName = subName;
	 	this.selectedItem =selectedItem;
	 	this.top_position = top_pos;
	 	this.left_position = left_pos;

 	};

	collageStyle.prototype = new outfitStyle();
	collageStyle.prototype.constructor = collageStyle;
	collageStyle.prototype.createItemList = function(){ 
		// override -> append the sub image to the creation canvas
		//highlight the i box to show it receives a new item
		$(".button_layer").effect("highlight",{color: 'rgb(140,220,200)'},"fast");
		
		var wrapper = $.parseHTML(this.layerWrapper);
		var collageItemWrapper = $.parseHTML("<li></li>");
		console.log(this.top_position);

		//if the item is not dragged into the canvas, the cloned items will be generated at the center of the canvas. 
		if(!this.top_position){
			$(collageItemWrapper).css({top:"40%",left:"40%"});
		}else{
			$(collageItemWrapper).css({top:this.top_position,left:this.left_position});
		}

		$(collageItemWrapper).append(this.selectedItem);
		
		console.log($(this.selectedItem));

		$("#sortable").prepend(wrapper);
		//assign the same id as selected image to the whole list wrapper
		$(wrapper).attr('id',this.idNum);
		$(wrapper).find(".imageIconBox").children("a").append(this.smallImageInfo);
		$(wrapper).find(".titleOfProduct").append(this.titleInfo);
		$(wrapper).find(".url").append(this.urlInfo);
		$(wrapper).find(".price").append(this.priceInfo);

		$(collageItemWrapper).css("z-index","1000");
		
		$("#outfitItems").append(collageItemWrapper);

		$('.removeIcon').click(function(event){
			$(this).parent().remove();
			var sameId = $(this).parent().attr('id');
			var parentList = $("#outfitItems").find('#'+sameId).parent();
			$("#outfitItems").find('#'+sameId).remove();
			$(parentList).remove();

			if($(".layers").length == 0){
   				$(".background_grid").show();
   			}
		});
		
	};




	collageStyle.prototype.adding = function(){//add canvas effect (draggable,rotatable,expandable) to all the elements
	 	console.log($(this));
		var itemsArray = $("#outfitItems > li");
		//make the items draggable
		
	 	$( ".draggable > li" ).draggable({
	 		opacity: 0.5,
	 		cursor: "move",
    		
    		//if the draggable item has angle, then cursor will be at the central position.
			start: function(event, ui) { 
		        var angle = getDegreesRotation($(this));
		        if(angle != 0){
		        	$(this).draggable({ cursorAt: { 
		        		left: Math.floor($(this).width() / 2),
		            	top: Math.floor($(this).height() / 2)} 
		            });
		        	
	        	}
			}

	 	});
		
		$("#collage #outfitItems > li").mousedown(function(event){
			$(this).find(".ui-rotatable-handle").css({
				display:"block",
			});
			$(this).css({
				border:"1px solid rgb(70,120,100)"
			});
		//if users click the item, it will be added with "selected img" class
			for(var i=0; i<itemsArray.length;i++){
				$(itemsArray[i]).removeClass('selectedImg');
				$(itemsArray[i]).find(".ui-resizable-handle").css("display","none");
				$(itemsArray[i]).find(".ui-rotatable-handle").css('display',"none");
				$(itemsArray[i]).css('border',"none");
			}
			$(this).addClass("selectedImg");
			$(this).find(".ui-resizable-handle").css("display","block");
			$(this).find(".ui-rotatable-handle").css('display',"block");
			$(this).css('border',"1px solid rgb(100,100,100)");

			
		});
		
		//selection border will be removed when users click outside the item
		$('#creationCanvas,.button_publish').click(function(event) {
			var clickedList = $(event.target).parent('li');


			if($(clickedList).is('.selectedImg')){
				return false;
			}else if($(event.target).is('.ui-draggable')){
				return false;
			}else{
				$(".draggable > li ").find(".ui-rotatable-handle").css({
					display:"none",
				});
				$(".draggable > li > .ui-resizable-handle").css("display","none");
				$(".draggable > li").css("border","none").removeClass("selectedImg");

			}


		});

		//make the item resizable
		$(".draggable  > li").resizable(
 			{aspectRatio: 1},
    		{handles: 'nw, sw,ne, se'}
		);

		//make the item rotatable
		 $(".draggable  > li").rotatable( );

		 //border shows up when users hover the item
		 $(".draggable  > li").hover(function(){
		 	$(this).addClass('border');
		 },function(){
		 	$(this).removeClass('border');
		 });	
	 };

	 collageStyle.prototype.clone = function(cloneImage){
	 	
	 	pushBackItems();
	 	var collageItemWrapper = $.parseHTML("<li></li>");
	 	$(collageItemWrapper).append(cloneImage);
	 	$(collageItemWrapper).css("z-index",1000);
	 	$(collageItemWrapper).addClass("clonedItem");
	 	$(collageItemWrapper).css({top:"40%",left:"40%"});
		$("#outfitItems").append(collageItemWrapper);



		$('.removeIcon').click(function(event){
			$(this).parent().remove();
			var sameId = $(this).parent().attr('id');
			var parentList = $("#outfitItems").find('#'+sameId).parent();
			$("#outfitItems").find('#'+sameId).remove();
			$(parentList).remove();
		});
	 };

//control panel functions
	$("#remove").on('click',function(e){
		var itemsOnCanvasArray = $("#outfitItems > li");
		var selectedImgId = $("#outfitItems > .selectedImg").find("img").attr('id');

		
		for(var i=0;i<itemsOnCanvasArray.length; i++){

			if($(itemsOnCanvasArray[i]).is(".selectedImg")){
				$(itemsOnCanvasArray[i]).remove();
				//if all the images with the same id are deleted, the image list in the sortable list will be deleted
				var itemId = $(itemsOnCanvasArray[i]).find('img').attr('id');				
				var itemNum = $("#outfitItems").find("#"+selectedImgId);
				console.log(itemNum.length);
				if(itemNum.length == 0){
					$("#sortable").find("#"+selectedImgId).remove();	
				}


				//if there is no other cloned item, then remove a cloneItem class from the last item.
				if($("#outfitItems #"+itemId).parents(".clonedItem").length <= 1){
					$("#outfitItems #"+itemId).parent().removeClass('clonedItem');
				}

				// if($(itemsOnCanvasArray[i]+".clonedItem").length < 1){
				// 	$(itemsOnCanvasArray[i]).removeClass("clonedItem");
				// }
			}

		};



		if($(".layers").length == 0){
			$(".background_grid").show();
		}
	})
	
	$("#clone").on('click',function(e){
		var itemsOnCanvas = $(".draggable > li");
		var imageWrapper = "<li></li>"	


		for(var i =0; i < itemsOnCanvas.length;i++){
			if($(itemsOnCanvas[i]).is(".selectedImg")){
				var originalId =$("#outfitItems > .selectedImg").children('img').attr('id');
				var cloneImage = $(itemsOnCanvas[i]).children("img").clone();
				$("#outfitItems #"+originalId).parent().addClass("clonedItem");
				$(cloneImage).attr('id',originalId);
				//console.log("cloneImage");
				//var wrappedImage = $(imageWrapper).append(cloneImage);
				var collage = new collageStyle();
				console.log(collage);
				collage.clone(cloneImage);
				collage.adding();
			};
			
		};



	});


	$("#mirror").on('click',function(e){
		var itemsOnCanvas = $(".draggable > li");
		for(var i =0; i < itemsOnCanvas.length;i++){
			if($(itemsOnCanvas[i]).is(".selectedImg")){
				var selectedImage = $(itemsOnCanvas[i]).children('img'); 
				if($(selectedImage).is(".reflection")){
					$(selectedImage).removeClass('reflection');
				}else{
					$(selectedImage).addClass('reflection');
				}
			};
			
		};
	});

	$("#front").on('click',function(e){
		
		var arrayPosition = 1001;//exclude the selected image
		var selectedId= $(".selectedImg > img").attr("id");
		var selected_zindex =parseInt($(".selectedImg").css("z-index"));

		var position=parseInt($("#outfitItems > li").length);
		
		$("#outfitItems > li").each(function(){
			
			var current_zindex = parseInt($(this).css("z-index"));

			// if the current z-index is smaller than the selected item z-index
			// then add one to each of the items below the selected item
			// Just think of it as a pushpop. 
			if(current_zindex > selected_zindex){

				$(this).css("z-index",current_zindex-1);

			}
		});

		$(".selectedImg").css('z-index',1000);

		var cloneList = $("#sortable > #"+selectedId).clone();
		$("#sortable").find("#"+selectedId).remove();
		$("#sortable").prepend(cloneList);


		



	});

	$("#back").on('click',function(e){
		
		var arrayPosition = 1000;//exclude the selected image
		var selectedId= $(".selectedImg > img").attr("id");
		var selected_zindex =parseInt($(".selectedImg").css("z-index"));

		var position=parseInt($("#outfitItems > li").length);
		
		$("#outfitItems > li").each(function(){
			
			var current_zindex = parseInt($(this).css("z-index"));
			var test = $.isNumeric(current_zindex);
			
			console.log(test);
			console.log("selected :"+selected_zindex);

			if(current_zindex < selected_zindex){

				$(this).css("z-index",current_zindex+1);
				console.log("Changed");
			}
		});


		$(".selectedImg").css('z-index',arrayPosition - position+1);

		var cloneList = $("#sortable > #"+selectedId).clone();
		$("#sortable").find("#"+selectedId).remove();
		$("#sortable").append(cloneList);
	});







	

//----------------outfit creation clear function------------------//

	$(".submitPanel .button_clear").click(function(){
		$("#outfitItems").empty();
		$("#sortable").empty();
		$(".background_grid").show();
	});




//----------------Collage creation + Storing images into user's database------------------//
//1 step = get the id of the selcted item


	$('#collage .sendInfo, #tryclothes .sendInfo').click(function(){
		
		var item_url; // image src 
		var user_id = 0;
		var product_id;
		var embelishment_id;
		var	people_id;
		var beauty_id;
		var model_id;
		//creator's id. the 0 will be assigned when the collage is automatically created
		var width;
		var height;
		var z_index;
		var x_position;
		var y_position;
		var angle;
		var flopImage;
		var itemArray =[];
		var embelishmentArray=[];
		var background_id = parseInt($("#tryclothes #creationCanvas .backgroundImg").attr("id"));
		var background_src = $("#tryclothes #creationCanvas .backgroundImg").attr("src");
		var model_id = parseInt($("#tryclothes #creationCanvas .virtualModel").attr("id"));
		var model_src = $("#tryclothes #creationCanvas .backgroundImg").attr("src");
		var canvasWidth = $("#creationCanvas").css("width");
		var canvasHeight= $("#creationCanvas").css("height");		
		

		//model
		//get the product id,z-index value and src of each item on the model
		$("#tryclothes #outfitItems > img").each(function(){
			z_index = $(this).css("z-index");
			item_url = $(this).attr('src');
			product_id = parseInt($(this).attr("id"));
		    itemArray.push({
		    	"productId":product_id,
		        "zIndex": z_index,
		        "item_url": item_url
		    });        
		
			
		});


		//model
		//get the image id,z-index, and embelishment
		$("#tryclothes #embelishment > img").each(function(){
			item_url = $(this).attr('src');
			z_index=$(this).css("z-index");
			embelishment_id = parseInt($(this).attr("id"));
			x_position = parseInt($(this).css("left"));
			y_position = parseInt($(this).css("top"));
			angle = getDegreesRotation($(this));
			height = parseInt($(this).css("width"));
			width = parseInt($(this).css("height"));
			flopImage = false;
		    embelishmentArray.push({
		        "zIndex": z_index,
		        "item_url": item_url,
		        "embelishmentId":embelishment_id,
		        "x_position": x_position,
		        "y_position": y_position,
		        "angle": angle,
		        "height": height,
		        "width": width,
		        "flopImage":flopImage
		    });        
		
			
		});
		
		//collage
		//get all the information for collage items
		$("#collage #outfitItems > li").each(function(){
			product_id = parseInt($(this).find(".product").attr("id"));
			embelishment_id = parseInt($(this).find(".embelishment").attr("id"));
			people_id = parseInt($(this).find(".people").attr("id"));
			beauty_id = parseInt($(this).find(".beauty").attr("id"));
			z_index = parseInt($(this).css("z-index"));
			item_url = $(this).children("img").attr('src');
			x_position = parseInt($(this).css("left"));
			y_position = parseInt($(this).css("top"));
			angle = getDegreesRotation($(this));
			height = parseInt($(this).css("width"));
			width = parseInt($(this).css("height"));
			flopImage = false;
			


			if($(this).find("img").is(".reflection")){
				flopImage = true;
			}
		    
		    itemArray.push({
		    	"productId":product_id,
		    	"embelishmentId":embelishment_id,
		    	"peopleId":people_id,
				"beautyId":beauty_id,
		        "zIndex": z_index,
		        "item_url": item_url,
		        "x_position": x_position,
		        "y_position": y_position,
		        "angle": angle,
		        "height": height,
		        "width": width,
		        "flopImage":flopImage
		    });        
		
			
		});

console.log(itemArray[1]["embelishmentId"]);

		// separate the calls - one for collage, tryon + tryon embelishment
		$.ajax({
			type:'POST',
			url:'../../includes/outfit_creation.php',
			data:{
				outfit_info:itemArray,
				userId:user_id,
				backgroundSrc:background_src,
				backgroundId:background_id,
				modelId:model_id,
				modelId:model_src,
				canvasWidth:canvasWidth,
				canvasHeight:canvasHeight,
				embelishmentArray:embelishmentArray},
			success:function(data){
				console.log("listOfItem_info: "+data);
			},
			error:function(data){
				console.log("Ajax call failed: ");
			}
		});
	});
})


//3 step = get the values of width, height, angle,and z-index of each item according to ids
//4 step = creat a collage

//Collage automatic creation
//1 step = get the id of the selected item
//2 step = creat a collage

//Model creation
//1 step = get the id of the selected model 
//2 step = get the type of pose
//4 step = get the id of the selected background image
//4 step = get the id of each item
//5 step = get the image type = upper, lower
//7 step = get the z-index of each item
//9 step = create a model style.

//-----------------item infinite scroll loading ----------------//
$(function(){
	
	$(".itemIconsWrapper > li,.itembox_subHeader > div > ul > .firstChild li").click(function(event){
		$("#itemLoadingBox > li").remove();
		var requested_item = $(this).attr("class");
		var load=1;
		var num_of_page = 20;
		var attr = "product"
		$.ajax({
		    type:"POST",
			url:'../app/class/controller/infinite',
		    data: {
		    	OFFSET:load,
		    	items:requested_item,
		    	per_page:num_of_page,
		    	attribute:attr
		    },
		    success: function(data){
		    	$("#itemLoadingBox").append(data);
		    	$('.loader').hide();
		    },
		    error:function(){
		    	alert("something went wrong");
		    }
		});

		
		
		$("#itemLoadingBox").scroll(function(){
			
			var view_height = $("#itemLoadingBox").height();
			var scroll_position = $("#itemLoadingBox").scrollTop();
			var scroll_to_bottom = view_height + scroll_position;
			var full_height = $("#itemLoadingBox")[0].scrollHeight-1;
			
			

			if(scroll_to_bottom == full_height){
				console.log("view_height "+view_height);
				console.log("scroll_position "+scroll_position);
				console.log("scroll_to_bottom "+scroll_to_bottom);
				console.log("full_height "+full_height);

				$('.loader').show();
				load++;
				console.log(load);
				$.ajax({
				    type:"POST",
					url:'../app/class/controller/infinite',
				    data: {
				    	OFFSET:load,
				    	items:requested_item,
				    	per_page:num_of_page,
				    	attribute:attr
				    },
				    success: function(data){
				    	
				    	if($("#itemLoadingBox > li").is(".last_item")){
				    		$('.loader').hide();	
				    		load=1;
				    		console.log(load);
				    		
				    	}else{
				    		$("#itemLoadingBox").append(data);
				    		$('.loader').hide();	
				    	}
				    	
				    	
				    },
				    error:function(){
				    	alert("something went wrong");
				    }
				});
			}
		})
	})



	

	
	
	

	

	//scrollTop refers to the top of the scroll position, which will be scrollHeight - offsetHeight

	// function isScrollBottom() { 
	//   var elementHeight = $(element).height(); 
	//   var scrollPosition = $(div).height() + $(div).scrollTop(); 
	//   return (elementHeight == scrollPosition); 
	// }

	
	// if($(window).scrollTop() == $(document).height() - $(window).height()){
	// 		load++;
	// 		$('.loader').show();
	// 		if(load * per_page > totalCount){

	// 		}else{
	// 			$.ajax({
					
	// 			    type: 'POST',
	// 			    // make sure you respect the same origin policy with this url:
	// 			    // http://en.wikipedia.org/wiki/Same_origin_policy
	// 			    url: '../includes/infinite_scroll.php',
	// 			    data: {OFFSET:load},
	// 			    success: function(data){
	// 			    	$("#photos").append(data);
	// 			    	$('.loader').hide();
	// 			    }
	// 			});
	// 		}
	// }
})
//-----------------Modal box ----------------//
//--open and close modal box--//
$(function(){
	$('#tryonContent .button_publish').click(function(event){
		// popup warning when more than two outfits are not selected
		
		//check to see if users are logged in
		$.ajax({
			type:"POST",
			url:'../app/class/controller/check_login_status.php',
			success:function(data){

				if(data=="false"){
					//if users are not logged in
					$('#registration_modalBox').fadeIn("fast");
					$("input[type='text'],input[type='password']").val("");
					$("#signup_modalBox .sub-header > span >span").remove();
					$("#signup_modalBox .sub-header > span").append("<span class='color_red'>  &nbsp;&nbsp;You need to create your account to proceed</span>");
					$("#signup_form").append("<input id=\"try_on_checker\" type=\"hidden\" name=\"from_tryon\" value=\"true\"/>");
					$("input[type='text'],input[type='password']").css({'border-color':'rgb(200,200,200)'});
					$(".errorMessage,.incorretInputMessage,.insertBox").hide();

				}else{
					//if users are logged in
					if($("#outfitItems img").length <= 2){
						alert("Please choose at least three items");
					}else if($("#outfitItems img").length >= 16){
						alert("You cannot choose more than 16 items");
					}else{
						$('#popup_overlay').fadeIn("fast");	
					}
				}
			},
			error:function(data){
				alert("something went wrong");
			},

		});

	});

	$("#modalbox").click(function(event){
			$('#popup_overlay').hide();
			$('.createCollage').hide();
			$('.publishes').fadeIn("fast");
			$(".title_box input").val("");
			$("#categorySelect").val("0");
			$("#subCategorySelect").empty();
			$(".description_box textarea").val("");
		});	

	$('.icon_close,.button_medium.cancel').click(function(event){
		$('#popup_overlay').hide();
		$(".title_box input").val("");
		$("#categorySelect").val("0");
		$("#subCategorySelect").empty();
		$(".description_box textarea").val("");

	});

	$('.button_publish,.popup-box').click(function(event){
		event.stopPropagation();
	});
});


//------------------------------Validation for tryon submission form------------------------------//
$(function(){

	var titleRe = /^[a-zA-Z0-9'-\s]+$/;
	var validTitle,validCategory = false;
	 		
	$("#tryclothes #modalbox .title_box input[type='text']").focusout(function(){
 		
 		if($(this).val().length <= 4){
 			$("#modalbox .title_box .required").text(" Please write more than 4 characters").effect('highlight',"slow");
 			$("#modalbox .title_box input").css({'border-color':'red'});
 			validTitle = false;
 		}else if($(this).val().length >= 70){
			$("#modalbox .title_box .required").text(" You cannot write more than 70 characters").effect('highlight',"slow");
			$("#modalbox .title_box input").css({'border-color':'red'});
			validTitle = false;
 		}else if(titleRe.test($(this).val())){
			$("#modalbox .title_box .required").text("*");
			$("#modalbox .title_box input").css({'border-color':'rgb(200,200,200'});
			validTitle = true;
		}else{
			$("#modalbox .title_box .required").text(" You can only use 0 ~9 and a ~ Z").effect('highlight',"slow");
			$("#modalbox .title_box input").css({'border-color':'red'});
			validTitle = false;
		}

		
	});

	$("#categorySelect").change(function(){
		if($(this).val() != 0){
			$("#modalbox .category_box .required").text("*");
			$("#modalbox .category_box select").css({'border-color':'rgb(200,200,200'});
		}else{
			$("#modalbox .category_box .required").text("please choose a category and a sub-category").effect('highlight',"slow");
			$("#modalbox .category_box select").css({'border-color':'red'});
		}
	});

	$("#subCategorySelect").change(function(){
		if($(this).val() != 0 || $(this).val() !="null"){
			$("#modalbox .category_box .required").text("*");
			$("#modalbox .category_box select").css({'border-color':'rgb(200,200,200'});
		}else{
			$("#modalbox .category_box .required").text("please choose a category and a sub-category").effect('highlight',"slow");
			$("#modalbox .category_box select").css({'border-color':'red'});
		}
	});

	$('.button_medium.publish').click(function(){	
		var firstOptionCategory = $("#categorySelect").val();	
		var firstOptionSubCategory = $("#subCategorySelect").val();
		
		console.log(firstOptionCategory + firstOptionSubCategory);		
		
		if(firstOptionSubCategory == "0" || firstOptionCategory == "null" || firstOptionCategory == "0"){
			validCategory = false;
			console.log("Fail")
		}else{
			console.log("sucess")
			validCategory = true;
		}

		if(validTitle && validCategory){
			$('.createCollage').fadeIn();
			$('.publishes').hide();
			validCategory, validTitle = false;
		}else{
			if(!validTitle){
				$("#modalbox .title_box .required").text(" You can only use 0 ~9 and a ~ Z").effect('highlight',"slow");
				$("#modalbox .title_box input").css({'border-color':'red'});
			}

			if(!validCategory){
				$("#modalbox .category_box .required").text("please choose a category and a sub-category").effect('highlight',"slow");
				$("#modalbox .category_box select").css({'border-color':'red'});
			}
		}
	});
});

//-----------------Form entry - sub categories change based on the chosen category----------------//
$(function(){

	var optionStyle = $("<option value='0'>Please choose a sub-category</option><option value='active'>Active</option><option value='basic'>basic</option><option value='businessCasual'>Business Casual</option><option value='bohemian'>Bohemian</option><option value='casual'>Casual</option><option value='classic'>Classic</option><option value='comfortable'>Comfortable</option><option value='celebrity'>Celebrity</option><option value='cute'>Cute</option><option value='elegant'>Elegant</option><option value='formal'>Formal</option><option value='goth'>Goth</option><option value='preppy'>Preppy</option><option value='punk'>Punk</option><option value='runway'>Runway</option><option value='sexy'>Sexy</option><option value='swimwear'>Swimwear</option><option value='vintage'>Vintage</option>");
	var optionOccasion = $("<option value='0'>Please choose a sub-category</option><option value='casualDate'>Casual Date</option><option value='classyDate'>Classy Date</option><option value='everyday'>Everyday</option><option value='formalEvents'>Formal Events</option><option value='nightOut'>Night Out</option><option value='outdoorActivities'>Outdoor Activities</option><option value='work'>Work</option>");
	var optionSeason = $("<option value='0'>Please choose a sub-category</option><option value='spring'>Spring</option><option value='midSpring'>Mid-Spring</option><option value='summer'>Summer</option><option value='fall'>Fall</option><option value='midFall'>Mid-Fall</option><option value='winter'>Winter</option>");
	var optionWeather = $("<option value='0'>Please choose a sub-category</option><option value='warm'>Warm</option><option value='freezing'>Freezing</option><option value='cold'>Cold</option><option value='raining'>Raining</option><option value='hot'>Hot</option><option value='snowing'>Snowing</option><option value='tropical'>Tropical</option>");
	
	$("#categorySelect").change(function(){
		if($(this).val() == "style"){

			$("#subCategorySelect").empty();
			$("#subCategorySelect").append(optionStyle);

		} else if($(this).val() == "Occassion"){
			$("#subCategorySelect").empty();
			$("#subCategorySelect").append(optionOccasion);

		}else if($(this).val() == "Season"){

			$("#subCategorySelect").empty();
			$("#subCategorySelect").append(optionSeason);

		}else if($(this).val() == "Season"){

			$("#subCategorySelect").empty();
			$("#subCategorySelect").append(optionWeather);

		}else if($(this).val() == "Weather"){

			$("#subCategorySelect").empty();
			$("#subCategorySelect").append(optionWeather);

		}else{

			$("#subCategorySelect").empty();

		};


	});




});

//-----------------Right side (item box)----------------//
//--item box header-//
$(function(){
	$(".controlBoxes > li").click(function(event){
		if($(event.target).is(".icon_close")){
			return false;
		}else{
			$(this).children().children(".subHeader-submenu").slideToggle(200);
		}
	});

	$('html,.icon_close').click(function(event){
        $('.subHeader-submenu').hide();
    });

	$(".filterOrderWrapper").click(function(){
		if( $(this).children().children(".subHeader-submenu").is("display","block")){
			$(this).children().children(".subHeader-submenu").hide();
    } else {
        // if other menus are open remove open class and add closed
        $(this).siblings().children().children(".subHeader-submenu").is("display","block"); 
        $(this).siblings().children().children(".subHeader-submenu").hide();
            $(".firstChild > div > .subHeader-submenu").hide();
        }
    });
	
	$(".firstChild > div > .subHeader-submenu").click(function(){
    	if( $(this).siblings().children().children(".subHeader-submenu").is("display","block") ) {
    		$(this).siblings().children().children(".subHeader-submenu").hide();
    	} 
	});
	
	$('.controlBoxes > li,.filterOrderWrapper label').click(function(event){
		event.stopPropagation();
	});	
});

//--dropdown for category box--//
$(function(){
	$(".parent-submenu").hover(function(e){			
	    $(this).children(".hiddenBox-submenu").fadeIn(100)},function(e){
		$(this).children(".hiddenBox-submenu").fadeOut(100);
	});
});


//--item box sub header--//
//sub header changes according to a selected header//
$(function() {
	//---icon close -- if users click the close icon, back to the oirginal state----//
 	$(".icon_close").click(function(){ 
 		$("#itemLoadingBox > li").remove();
        $(".itemBoxImages").hide();
        $(".selectedListItem").remove();
        $(".default").show();
        $(".filledDownArrow").show();
		$(".icon_close").hide();

        console.log($(this).parent().parent().parent().parent().parent().attr('id'));
	    switch ($(this).parent().parent().parent().parent().parent().attr('id')){
		    case 'myItemList': $("#myItemImages > .itemIconsWrapper").show();break;
		    case 'clothingItemList': $("#clothingImages > .itemIconsWrapper").show();break;
		    case 'modelList': $("#modelImages > .itemIconsWrapper").show();break;
		    case 'embelishmentList': $("#embelishmentImages > .itemIconsWrapper").show();break;
		    case 'itemList': $("#itemImages > .itemIconsWrapper").show();break;
		    case 'beautyList': $("#beautyImages > .itemIconsWrapper").show();break;
		    case 'peopleList': $("#peopleImages > .itemIconsWrapper").show();break;

		}


	}); 

    $("#itembox_header ul li").click(function() { 
    	$("#itemLoadingBox > li").remove();
        $(this).addClass("currently_focus");
        $("#itembox_header > ul > li").not(this).removeClass("currently_focus");
        $(".itemBoxImages").hide();
        $(".selectedListItem").remove();
        $(".default").show();
        $(".filledDownArrow").show();
		$(".icon_close").hide();
 	}); 	

     $(".itemList_myItems").click(function() { 
        $("#myItemList,#myItemImages > .itemIconsWrapper").show();
        $(".itembox_subHeader > div,.itemBox > .itemIconsWrapper").not("#myItemList,#myItemImages > .itemIconsWrapper").hide();
    }); 

    $(".itemList_clothing").click(function() { 
        $("#clothingItemList,#clothingImages >.itemIconsWrapper").show();
        $(".itembox_subHeader > div,.itemBox > .itemIconsWrapper").not("#clothingItemList,#clothingImages > .itemIconsWrapper").hide();
 	}); 
    
    $(".itemList_model").click(function() { 
       $("#modelList,#modelImages > .itemIconsWrapper").show();
        $(".itembox_subHeader > div,.itemBox > .itemIconsWrapper").not("#modelList,#modelImages > .itemIconsWrapper").hide();
 	}); 
    
    $(".itemList_Embelishment").click(function() { 
       	$("#embelishmentList,#embelishmentImages > .itemIconsWrapper").show();
        $(".itembox_subHeader > div,.itemBox > .itemIconsWrapper").not("#embelishmentList,#embelishmentImages > .itemIconsWrapper").hide();
 	}); 

    $(".itemList_items").click(function() { 
        $("#itemList,#itemImages > .itemIconsWrapper").show();
        $(".itembox_subHeader > div,.itemBox > .itemIconsWrapper").not("#itemList,#itemImages > .itemIconsWrapper").hide();
 	}); 

    $(".itemList_beauty").click(function() { 
        $(".itemBoxImages").show();
		$(".itembox_subHeader > div,.itemBox > .itemIconsWrapper").not("#beautyList,#beautyImages > .itemIconsWrapper").hide();
 	}); 
    
    $(".itemList_people").click(function() { 
        $(".itemBoxImages").show();
        $(".itembox_subHeader > div,.itemBox > .itemIconsWrapper").not("#peopleList,#peopleImages > .itemIconsWrapper").hide();
 	}); 
});

//-------order box changes based on the selected element------------//
$(function(){
	$(".subHeader-list.order .submenu-second li").click(function(){
		$(".order .default").hide();
        if($(".order .selectedListItem").is(":visible")){
        	$(".order .selectedListItem").text($(this).text());
        }else{
        	$(".subHeader-list.order").append("<span class='selectedListItem'>"+$(this).text()+"</span>"); 
    	}
	});
});

//--items show up--//
$(function() { 
 	$(".itemBox > .itemIconsWrapper > li, .selectionBox .subHeader-submenu > ul > li").click(function() { 
        $(".itemBox > .itemIconsWrapper").hide();
        $(".firstChild .filledDownArrow").hide();
		$(".icon_close").show();
 	});                                     
    
    $(".itemIconsWrapper > li").click(function(){
    	$(".itemBoxImages").show();
    })

    $("#myItemImages > .itemIconsWrapper > li, #myItemList .selectionBox .subHeader-submenu > ul > li").click(function() { 
        $("#myItemList .firstChild .subHeader-list > .default").hide();
        
        if($(".firstChild .selectedListItem").is(":visible")){
        	$("#myItemList .firstChild .selectedListItem").text($(this).text());
        }else{
        	$("#myItemList .firstChild .subHeader-list").append("<span class='selectedListItem'>"+$(this).text()+"</span>"); 
    	}
    	

 	});	
    
    $("#clothingImages > .itemIconsWrapper > li,#clothingItemList .selectionBox .subHeader-submenu > ul > li").click(function() { 
        $("#clothingItemList .firstChild .subHeader-list > .default").hide();
        
        if($(".firstChild .selectedListItem").is(":visible")){
        	$("#clothingItemList .firstChild .selectedListItem").text($(this).text());
        }else{
        	$("#clothingItemList .firstChild .subHeader-list").append("<span class='selectedListItem'>"+$(this).text()+"</span>"); 
    	}
 	}); 
    
    $("#modelImages > .itemIconsWrapper > li,#modelList .selectionBox .subHeader-submenu > ul > li").click(function() { 
        $("#modelList .firstChild .subHeader-list > .default").hide();
        
        if($(".firstChild .selectedListItem").is(":visible")){
        	$("#modelList .firstChild .selectedListItem").text($(this).text());
        }else{
        	$("#modelList .firstChild .subHeader-list").append("<span class='selectedListItem'>"+$(this).text()+"</span>"); 
    	}
 	}); 
    
    $("#embelishmentImages > .itemIconsWrapper > li,#embelishmentList .selectionBox .subHeader-submenu > ul > li").click(function() { 
        $("#embelishmentList .firstChild .subHeader-list > .default").hide();
        
        if($(".firstChild .selectedListItem").is(":visible")){
        	$("#embelishmentList .firstChild .selectedListItem").text($(this).text());
        }else{
        	$("#embelishmentList .firstChild .subHeader-list").append("<span class='selectedListItem'>"+$(this).text()+"</span>"); 
    	}
 	});   	
    
    $("#itemImages > .itemIconsWrapper > li, #itemList .selectionBox .subHeader-submenu > ul > li").click(function() { 
        $("#itemList .firstChild .subHeader-list > .default").hide();
        
        if($(".firstChild .selectedListItem").is(":visible")){
        	$("#itemList .firstChild .selectedListItem").text($(this).text());
        }else{
        	$("#itemList .firstChild .subHeader-list").append("<span class='selectedListItem'>"+$(this).text()+"</span>"); 
    	}
 	});
});



//----------------Confirmation popup for leaving the page-----------------//
$(function(){
	$("#tryclothes #header a, #collage #header a").click(function(event) {
		$(window).bind('beforeunload', function(){
			return 'Your creation will be lost if you do not publish it';
		});
		$('.noUnloadMessage').on('click', function(e){
        	$(window).unbind('beforeunload');
		});
	});
});



//********************Shop html********************//
//--Top selling item hover effect--//
$(function(){
	$(".topSellingBox li a").hover(function(){			
	    $(this).children(".popupBox").slideToggle(130)},function(){
		$(this).children(".popupBox").slideToggle(130);
	});
});



//--Side menu toggle--//

$(function(){
	$(".sideMenu > ul > li").not(".titleHeader").click(function(){
		var currentDropdown = $(this).children(".submenu_second")

		$(currentDropdown).slideToggle(350);
		$(".sideMenu > ul > li .submenu_second").not(currentDropdown).slideUp(350);		



	});
	$('.submenu_second').click(function(event){
		event.stopPropagation();
	});
});

//--Side menu third level dropdown--//
$(function(){
	$(".sideMenu .submenu_second > ul > li").click(function(){
		var currentDropdown = $(this).children(".submenu-thirdLevel")

		$(currentDropdown).slideToggle(350);
		$(".submenu-thirdLevel").not(currentDropdown).slideUp(350);		
		$('.selectBox > div > select[name="sort"]').val("relevance").trigger('change');

		$("#footer").hide();
		$(".button_about").show();


	});

	$(".sideMenu .submenu-thirdLevel > ul > li,.top .sideMenu > ul > li").click(function(){
		$('.selectBox > div > select[name="sort"]').val("relevance").trigger('change');
	});

	$('.submenu-thirdLevel').click(function(event){
		event.stopPropagation();
	});
});

//--hover effect for contents--//
$(function(){
	$(".items > li").hover(function(){
		$(this).children(".singleItemImage,.button-tryon,.button_heart-item").fadeIn("fast");},function(){
		$(this).children(".singleItemImage,.button-tryon,.button_heart-item").fadeOut("fast");
		$(this).children().children(".popupBox").fadeOut("fast");
	});
});

//--Userpage  modalboxes--//
$(function(){
	$('.singleItemImage, .small_boxes > ul li > a').click(function(event){
		$('#quickView').fadeIn("fast");
	});
	$('.userProfile > div > div').click(function(event){
		$('#changePic').fadeIn("fast");
	});
	$('.editIcon').click(function(event){
		$('#editProfile').fadeIn("fast");
	});

	$("#modalbox-quick,#modalbox-editProfile,#modalbox-changePic").click(function(event){
			$('#quickView,#editProfile,#changePic').hide();
		});	

	$('.icon_close,.button_medium.cancel,.confirmation .cancel').click(function(event){

		$('#quickView,#editProfile,#changePic,#registration_modalBox').hide();});

	$('.popup-box').click(function(event){
		event.stopPropagation();
	});
});

$(function(){
	$('.jumpToSignup').click(function(event){
		$('#registration_modalBox').fadeIn("fast");

		//remove all the previous input.
		$("#signup_modalBox .sub-header > span >span").remove();
		$("#signup_modalBox #try_on_checker").remove();
		$("input[type='text'],input[type='password']").val("");
		$("input[type='text'],input[type='password']").css({'border-color':'rgb(200,200,200)'});
		$(".errorMessage,.incorretInputMessage,.insertBox").hide();
	});

	$("#signup_modalBox").click(function(event){
		//if users did not choose either options in the more information popup and clicked the outside box
		if($('#signup .personal').is(':visible')){
			$('html').css("overflow", "hidden");
			return false;
			
		}else{
			$('#registration_modalBox').hide();
		};
	});
		
		

	$('#signup, #login').click(function(event){
		event.stopPropagation();
	});
});


//---change tabs for quick look --//
$(function(){
	$('.itemDetails-tabs > ul > li').click(function(event){
		var currentBox = $(this).children("div");
		var currentTab = $(this).children("span");
		$(currentBox).show();
		$(currentTab).attr("id","current");
		//in order to separate the main item info box from the quick view item box on the shopitem
		$(this).parent().parent().children().children("li").children('span').not(currentTab).removeAttr('id',"");
		$(this).parent().parent().children().children("li").children("div").not(currentBox).hide();
	});

});

//--side bar selected items--//
$(document).ready(function(event){
	$('.top > .sideMenu > ul > li,.middle .submenu_second > ul > li').not('.titleHeader').click(function(event){
		var $selected = $(this).children("span");
		$selected.not('.titleHeader > span').addClass('current');
		$("span").not($selected).removeClass('current');
		$(".contentBox .items,.bottom > .sideMenu,.item-guides").show();


		var $select_clone = $selected.clone().removeClass('current');
		$(".item-guides > ul > .firstChild > .main").html($select_clone.html());


		if($('.item-guides > ul > .firstChild > .sub').text().length > 0){
			$(".item-guides > ul > .firstChild > .sub").empty();			
		};
	});

	$('.middle .submenu-thirdLevel > ul > li').click(function(event){

		var $selected = $(this).children("span");
		$selected.not('.titleHeader > span').addClass('current');
		$(".submenu-thirdLevel > ul > li > span").not($selected).removeClass('current');

		var $select_clone = $selected.clone().prepend(' > ').removeClass('current');
		$(".item-guides > ul > .firstChild > .sub").html($select_clone.html());

	});

});



//--remove and add class for filters--//
$(function(){
	
	$('.submenu_second > ul > label').click(function(event){
		var $filter_element = $(this).children().children('span').addClass('filter').clone();
		var closeBox = "<span class='icon_close'></span>";
		var $filter = $filter_element.append(closeBox);
		var $id = $filter.attr('id');
	
		$(".deleteAll").show();

		var arrayIDS = $(".titleHeader > ul > li > span[id]").map(function() {
		 return this.id; }).get();

		$.each(arrayIDS,function(){
			if(this == $id){
				$(".titleHeader > ul > li > span#" + this).parents(".filtering").remove();
			};
		});

		$filter.appendTo('.filters > ul > .titleHeader > ul').wrap('<li class="filtering"></li>');		


	});	



	$('.submenu_second > form > ul > label').click(function(event){
		var $filter_element = $(this).children().children('span').addClass('filter');
		var closeBox = "<span class='icon_close'></span>";
		var $filter = $filter_element.append(closeBox);		
		$filter.appendTo('.filters > ul > .titleHeader > ul').wrap('<li class="filtering"></li>');




    

	});

	$('.deleteAll').click(function(){
		$(".titleHeader > ul > .filtering").remove();
		$(this).hide();
	});
	

	$('.titleHeader > ul').on('click','.filtering', function(){
		$(this).remove();
	});
});



//--current--//
$(function(){
	$(".bottom .subHeader > ul > li").click(function() { 
        $(this).children("span").addClass("blue-color");
        $(".bottom .subHeader > ul > li > span").not($(this).children("span")).removeClass("blue-color");
 	}); 
});


//*---shopItem sticky subheader---*//
$(function(){
    $(window).scroll(function(){
        var scrollTop = 60;
        
        if($(window).scrollTop() >= scrollTop){
            $('#shopItem .top .subHeader').css({
                position : 'fixed',
                top : '0',
            });
        }

        if($(window).scrollTop() < scrollTop){
            $('#shopItem .top .subHeader').removeAttr('style'); 
        }
    })
});


//*---shopItem bottom change tab---*//

$(function(){
	$('#similarItems').click(function(event){
		$(".bottom .similarItems").show();
		$(".inside > div").not(".similarItems").hide();
	});
	$('#creation').click(function(event){
		$(".bottom .creation").show();
		$(".inside > div").not(".creation").hide();
	});
	$('#comment').click(function(event){
		$(".bottom .comment").show();
		$(".inside > div").not(".comment").hide();
	});
	$('#all').click(function(event){
		$(".bottom .overall").show();
		$(".inside > div").not(".overall").hide();
	});
	$('#likes').click(function(event){
		$(".bottom .likes").show();
		$(".inside > div").not(".likes").hide();
	});
	$('#following').click(function(event){
		$(".bottom .following").show();
		$(".inside > div").not(".following").hide();
	});
	$('#follower').click(function(event){
		$(".bottom .follower").show();
		$(".inside > div").not(".follower").hide();
	});
	$('#setting').click(function(event){
		$(".bottom .setting").show();
		$(".inside > div").not(".setting").hide();
	});

});


//**********feed navi current*********//
$(function(){
	$("#feed_navi ul li").click(function() { 
                $(this).addClass("current");
        $("#feed_navi ul li").not(this).removeClass("current");
 	}); 
});



//********* expand text/content************//
$(function(){
	$(".moreText").click(function() { 
        if($("#userPage .introduction p").hasClass("expandable")){
            $(this).text("Show Less");
        }else {
            $(this).text("Show More");
        }
        $("#userPage .introduction p").toggleClass("expandable");
        
 	}); 
});

$(function(){
	$(".moreAward").click(function() { 
		 if($("#userPage .rightSide .hidden").is(":visible")){
            $(this).text("Show more");
        }else {
            $(this).text("Show less");
        }

        $("#userPage .rightSide .hidden").fadeToggle("fast");
 	}); 
});

//-------------Follow button gets clicked -------//
$(function(){

	$("#userPage .lastChild .leftSide .follow.round_medium").click(function(e) {
		$(this).toggleClass('clickedBlue');
	});
});

//--login--//
$(function(){
	$(".login").click(function(){
		$("#signup").hide();
		$("#login").fadeIn("fast");
	});

	$("#login .firstList").click(function(){
		$("#login").hide();
		$("#signup").fadeIn("fast");
	});
});


/*-----------signup page + setting  validation form---------------------*/
$(function(){
	//once everything is validated, form will be submitted
	var validName,validEmail,validLoginEmail=false;
	var validPassword,validLoginPassword=false;
	var samePass = true;
	var validCountry,validAge,validHeight,validSkinColor,validSize,validBody = false;
	var validCityName = true;
	var validNameFor_signup = true;	
	//this allows users to submit the form without touching the text area.
	
	//if any error occurs, erro box comes out
	var insertBox = "<div class='insertBox'><span class='insertMessage'></span></div>";
	var errorMessage = "<span class='color_red errorMessage'>Please fill out the form </span>";
	var incorretInputMessage = "<span class='color_red errorMessage wrongCombo'>Incorrect combination</span>";
	var incorretName = "<span class='color_red errorMessage wrongCombo'>Please put the valid name</span>";

	//regular expression 
	var regName = /^[a-zA-Z0-9'-]+$/;
	var regCity = /^[a-zA-Z0-9'-\s]+$/;
	var regPass = /^[a-zA-Z'-@#$%&]+$/;
	var regEmail =/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
		

	//check to see how strong the newly created password is
	function strengthOfPassword(pass){	
		var message;
		var strength = new Array();
		strength[0] = pass.match(/[a-z]/);
		strength[1] = pass.match(/[A-Z]/);
		strength[2] = pass.match(/[0-9]/);
		strength[3] = pass.match(/[-@#$%&']/);
		
		var sum = 0;
		for (var i=0; i<strength.length; i++) {
		    sum += strength[i] ? 1 : 0;
		}

		switch (sum) {
		    case 1: message = "The strength of this password is weak"; break;
		    case 2: message ="The strength of this password is okay"; break;
		    case 3: message ="The strength of this password is strong"; break;
		    case 4: message ="The strength of this password is very strong"; break;
		}

		$("#newPassword").next(".insertBox").remove();
		$("#newPassword").parents('li').append(insertBox);
		$("#newPassword").next(".insertBox").addClass('strengthOfPassword').fadeIn();
		$("#newPassword").next('.insertBox').children('.insertMessage').text(message);		
	
	}


	//validateSet object method - it will check whether each element (name, email, password) is written in a proper format.
	validationSet.prototype.checking = function(inputTag){
		
		//for the input written in a proper format 
		function correctFormat(){
				if($(inputTag).is("#verifiedPassword")&&samePass){
					strengthOfPassword($("#verifiedPassword").val());
					$("#newPassword").css({'border-color':'rgb(200,200,200)'});
				}
				$(inputTag).next('.insertBox').fadeOut();

				$(inputTag).css({'border-color':'rgb(200,200,200)'});
		};

		//for the input written in a wrong format
		function wrongFormat(){
			if($(inputTag).next('.insertBox').is(":visible")){
				return false;
			}else{
				$(inputTag).css({'border-color':'red'});	
				$(inputTag).parents('li').append(insertBox);
				$(inputTag).next(".insertBox").fadeIn();
			}
		};


		//if there is no text in the box
		if($(inputTag).val() ==''){
			if($(inputTag).is("#cityName")){
				correctFormat();
				//On the setting page, the city is an option box so the city validation is always true when it is empty
				validCityName = true;

				//this prevents any error popup from showing up for login form. 
			}else if(!$(inputTag).is("#loginEmail")){

				if($(inputTag).is("#name")){
					wrongFormat();
					$(inputTag).next('.insertBox').children('.insertMessage').text("Please write more than 4 characters");
					validName = false;
					
				}else if($(inputTag).is("#email")){
					wrongFormat();
					$(inputTag).next('.insertBox').children('.insertMessage').text("Please write more than 4 characters");
					validEmail = false;
					
				}else if($(inputTag).is("#newPassword")){
					validPassword = false;
					$(inputTag).next(".insertBox").remove();
				}else if($(inputTag).is("#loginPassword")){
					validLoginPassword = false;
				};
			}	
		//if the string is less than 4 characters
		}else if($(inputTag).val().length <= 4){
			//this will prevent the error box from showing up
			if(!($(inputTag).is("#verifiedPassword") ||$(inputTag).is("#password") ||$(inputTag).is("#loginEmail"))){
				if($(inputTag).is("#newPassword")){
					$(inputTag).next(".insertBox").remove();
				}

				//check whether the city name is submitted in a correct format
				if($(inputTag).is("#cityName")){
					if(regCity.test($(inputTag).val())){
						correctFormat();
						validCityName = true;
						console.log("test");
					}else{
						console.log("fail");
						validCityName = false;
						wrongFormat();
						console.log(this.cityName);
						$(inputTag).next('.insertBox').children('.insertMessage').text("You are only allowed to use [a ~ Z],[0~9]");
					}
				}else if($(inputTag).is("#email")){
					wrongFormat();
					$(inputTag).next('.insertBox').children('.insertMessage').text("Your E-mail is not properly formatted");
					validEmail = false;
				}else if($(inputTag).is("#loginPassword")){
					validLoginPassword = false;
				}else{
					wrongFormat();
					$(inputTag).next('.insertBox').children('.insertMessage').text("Please write more than 4 characters");
				}
			}else{
				return false
			}
		//if the string is more than 4 characters	
		}else if($(inputTag).val().length > 4){
			if($(inputTag).is("#name")){
				if(regName.test(this.username)){
					$.ajax({
						type:'POST',
						url:'../controller/duplicate_checker',
						//if you put php extension, it won't work with Post type
						//because .htaccess is controlling the url now.
						data: {new_username : this.username},

						success:function(data){
							if(data == "true"){
								correctFormat();
								validName = true;
								validNameFor_signup=true;

							}else{
								wrongFormat();
								$("#name").next('.insertBox').children('.insertMessage').text(data);
								validName = false;	
								validNameFor_signup=false;
							}
						},

						error:function(data){				
							$("#name").next('.insertBox').children('.insertMessage').text(data);
							validName = false;	
							validNameFor_signup=false;
						}
					});
				}else{
					wrongFormat();
					$(inputTag).next('.insertBox').children('.insertMessage').text("You are only allowed to use [a ~ z],[0 ~ 9],[' and -']");
					validName = false
					validNameFor_signup=false;
				}
				
			}else if($(inputTag).is("#cityName")){
				if(regCity.test(this.cityName)){
					correctFormat();
					validCityName = true;
					console.log("test");
				}else{
					console.log("fail");
					validCityName = false;
					wrongFormat();
					console.log(this.cityName);
					$(inputTag).next('.insertBox').children('.insertMessage').text("You are only allowed to use [a ~ Z],[0~9]");
				}
			}else if($(inputTag).is("#newPassword")){
				if(regPass.test(this.password)){
					correctFormat();
					validPassword = true;
					
					if(!samePass){
						wrongFormat();
						$(inputTag).next('.insertBox').children('.insertMessage').text("Mismatch");	
					}
					

				}else{
					$(inputTag).next(".insertBox").remove();
					validPassword = false;
					samePass = false;
					wrongFormat();
					$(inputTag).next('.insertBox').children('.insertMessage').text("You are only allowed to use [a ~ Z],[0~9],['-@#$%&]");
				}
			}else if($(inputTag).is("#email")){
				if(regEmail.test(this.email)){

					//to determine the right url to the duplicate checker
					if($(inputTag).is("#setting #email")){
						var source='../controller/duplicate_checker';
					}else{
						var source='../app/class/controller/duplicate_checker';
					}

					$.ajax({
						type:'POST',
						url:source,
						//if you put php extension, it won't work with Post type
						//because .htaccess is controlling the url now.
						data: {email_to_check : this.email},

						success:function(data){
							if(data == "new_email"){
								correctFormat();
								validEmail = true;	
							}else{
								wrongFormat();
								$("#email").next('.insertBox').children('.insertMessage').text(data);
								validEmail = false;	
							}
						},

						error:function(data){				
							$("#email").next('.insertBox').children('.insertMessage').text(data);
							validEmail = false;	
						}
					});

					
				}else{
					console.log(this.email)
					wrongFormat();
					$(inputTag).next('.insertBox').children('.insertMessage').text("Your E-mail is not properly formatted");
					validEmail = false;
				}
				
			}else if($(inputTag).is("#loginPassword")){
				if(regPass.test(this.loginPass)){
					correctFormat();
					validLoginPassword = true;
				}else{
					console.log(this.loginPass)
					validLoginPassword = false;
				}
				
			}else if($(inputTag).is("#loginEmail")){
				if(regEmail.test(this.loginEmail)){
					correctFormat();
					validLoginEmail = true;
				}else{
					console.log(this.loginEmail)
					validLoginEmail = false;
				}
				
			}else if($(inputTag).is("#verifiedPassword")){
				samePassword(inputTag);
				if(samePass){
					correctFormat();

				}
				samePass=false;
				
			}else{
				correctFormat();
			}
		};

		

		
		

	};

	

	$('select').change(function(){
		if($(this).val() != "0"){
			$(this).css({'border-color':'rgb(200,200,200)'});
		};
	});

	function samePassword(inputTag){
		//whether two passwords match
		if($("#newPassword").val() === $("#verifiedPassword").val()){
	    	return samePass = true;
		}else{
			$("#newPassword").next(".insertBox").remove();
			$("#newPassword,#verifiedPassword").css({'border-color':'red'});	
			$("#newPassword").parents('li').append(insertBox);
			$("#newPassword").next(".insertBox").fadeIn();
			$("#newPassword").next('.insertBox').children('.insertMessage').text("Please input the same password");
			return samePass = false;
		}	
	
	};


	function selectedCountry(){
		//whether the country input is selected
			if($("#country").val() != "0"){
				$("#country").css({'border-color':'rgb(200,200,200)'});
				validCountry =  true;
			}else{
				validCountry = false;
			}
	}


	//if every element in the form is written in a right format, the form will be submitted
	$("#signup #confirm").click(function(){
		
		selectedCountry();
		
		//If everything is written in a right format, the form gets submitted
		if(!validCountry){
			$("#country").css({'border-color':'red'});
			validCountry = false;
		}

		if(!validEmail){
			$("#email").css({'border-color':'red'});
			validEmail = false;
		}

		if(!validPassword){
			$("#newPassword").css({'border-color':'red'});
			validPassword = false;
			samePass = false;
		}

		
		if(validEmail && validPassword && validCountry){
			
			$('.setting-wrapper.personal').fadeIn();
			$(".closeBox").hide();
			$("#signup > form > div:not('.setting-wrapper.personal')").hide();

		}else{
			if($("#signup .account .errorMessage").is(":visible")){
				$("#signup .account .errorMessage").effect( "highlight", "slow" );
			}else{
				$("#signup .account .sub-header > span").append(errorMessage);
			}
			return false;
		}
			
	});


	//if every element in the form is written in a right format, the form will be submitted
	$("#loginConfirm").click(function(){
		console.log(validLoginEmail+" "+validLoginPassword);
		if(validLoginEmail && validLoginPassword){
			var email = $("#loginEmail").val();
			var password = $("#loginPassword").val();
			$.ajax({
					type:'POST',
					url:'../app/class/controller/login',
					data:{email:email,password:password},
					success:function(data){
						if(data=="true"){
							window.location.reload(true);
						}else{
							if($("#login .errorMessage").is(":visible")){
								$("#login  .errorMessage").effect( "highlight", "fast" );
							}else{
								$("#login  .sub-header > span").append(incorretInputMessage);
							}
							return false;	
						}
						
						

					},
					error:function(data){
						if($("#login .errorMessage").is(":visible")){
							$("#login  .errorMessage").effect( "highlight", "fast" );
						}else{
							$("#login  .sub-header > span").append(incorretInputMessage);
						}
						return false;
						
					}
				});
			return false;

		}else{
			if($("#login .errorMessage").is(":visible")){
				$("#login  .errorMessage").effect( "highlight", "fast" );
			}else{
				$("#login  .sub-header > span").append(incorretInputMessage);
			};
			return false;
		}
		
	});

	$("#setting #confirm").click(function() {   
		//Should be used PHP in order to send the user back to the previous page
		
		//If everything is written in a right format, the form gets submitted
		
		samePassword();
		console.log(validName+" "+validEmail);
		console.log(samePass+" "+validPassword+" "+validCityName);
		if(samePass && validCityName){
			if(validEmail!=false && validName!=false){
				return true; 
			}else{
				$(window).scrollTop(0);
				return false;
			}
		}else{

			if($("#cityName").val().length > 0){
				if(!validCityName){
					$("#cityName").css({'border-color':'red'});
					validCityName = false;
				}
			}else{
				$("#cityName").css({'border-color':'rgb(200,200,200)'});
				validCityName = true;
			}



			if($("#setting .errorMessage").is(":visible")){
				$("#setting .errorMessage").effect( "highlight", "slow" );
			}else{
				$("#setting .sub-header.accountInfo > span").append(errorMessage);
			}

			$(window).scrollTop(0);

			return false;
		}	
		

	  	
	});

	$("#modalbox-editProfile #confirm").click(function() {   
			
			if(validName || validNameFor_signup){
				return true;
			}else{
				if($("#modalbox-editProfile .errorMessage").is(":visible")){
					$("#modalbox-editProfile  .errorMessage").effect( "highlight", "fast" );
				}else{
					$("#modalbox-editProfile  .popup-box-header").append(incorretName);
				};
				return false;
			}
		  	
		});

	function validationSet(password,oPassword,verifiedPass, email,name,logEmail,logPass,cityN){
		this.password = password;
		this.oldPassword = oPassword;
		this.verifiedPass = verifiedPass;
		this.email = email;
		this.username = name;
		this.loginEmail = logEmail;
		this.loginPass = logPass;
		this.cityName = cityN
	}


	//this will create an object 
		$(".setting input[type='text'],.setting input[type='password'],#modalbox-editProfile input[type='text']").focusout(function(){
			//make variables for each value
			var focusInput = $(this);
			if($(this).is("#newPassword")){
				var password = $(this).val()
			}else if($(this).is("#verifiedPassword")){
				var verifiedPass = $(this).val();
			}else if($(this).is("#password")){
				var oPassword = $(this).val();
			}else if($(this).is("#email")){
				var email = $(this).val();
			}else if($(this).is("#loginEmail")){
				var logEmail = $(this).val();
			}else if($(this).is("#loginPassword")){
				var logPassword = $(this).val();
			}else if($(this).is("#cityName")){
				var cityN = $(this).val();
			}else if($(this).is("#name")){
				var name = $(this).val();
			}		

			var validation = new validationSet(password,oPassword,verifiedPass, email,name,logEmail,logPassword,cityN);
		
			//sending the input tag that users just unfocus
			validation.checking(focusInput);

		});

});


//--account setting--//
$(function(){
	//redirect users
	$("#setting #cancel").click(function(){
		window.location.replace("../../../public/index.php");
	});


	//account deletion
	$("#account_delete").click(function(){
		$.ajax({
			type:'POST',
			url:'../controller/delete',
			success:function(data){
				if(data=="true"){
					window.location.replace("../../../public/index.php");
				}else{
					window.location.replace("../../../public/index.php");
				}
				console.log(data);	
			
			},
			error:function(data){
				window.location.replace("../../../public/index.php");
				console.log(data);	
				
			}
		});
	});

});


//--price range--//
$(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 1000,
      values: [ 0, 1000 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  });







