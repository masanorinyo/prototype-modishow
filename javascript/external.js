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
	$(".button_heart").on('click',function(){
		$(this).children('.heart_filled').fadeToggle("fast");
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
//---------------------Modal box---------------------//
//--Open and close modal box--//
$(function(){
	$('.openModal').click(function(event){
		$('#popup_overlay').show();
	});
	$('.openModal,.singleItemImage,.editIcon,.userProfile > div > div, .editIcon').click(function(event){
		$('html').css("overflow", "hidden");
	});

	$('.openModal').click(function(event){
		$('.backToTop').css("display", "none");
	});
	$('#modalbox,#modalbox-quick,#modalbox-editProfile,#modalbox-changePic').click(function(event){
		$('#modalbox-backToTop').css("display", "block");
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
	$('.closeBox,.icon_close').click(function(event){
		$('html').css("overflow","visible"); 
	});
	$('#modalbox,#modalbox-quick,#modalbox-editProfile,#modalbox-changePic').click(function(event){
		$('html').css("overflow","visible"); 
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
        var scrollTop = 50;
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

	$('.stickynavi-left > li, #stickynavi_filter .stickynavi_submenu_second, #stickynavi_creator .stickynavi_submenu_second, #stickynavi_location input[type="text"]').click(function(event){
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

	$("#stickynavi_location form").submit(function(){
		var selectedCountry = $("#stickynavi_location select option:selected").text();
		var inputCity = $("#cityInput").val();
		if(inputCity){
			var slocation = selectedCountry + " : "+inputCity;
		}else{
			var slocation = selectedCountry;
		}
		$("#stickynavi_location .stickynavi_list").text(slocation);
	});
});

//---------------Prevent default <a> action of refreshing the page --------------//
$(function(){
	$(".stickynavi_submenu").click(function(e){
		e.preventDefault();
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
    });
	
	$('.button_category,.button_layer,.openLayer,.hiddenBox').click(function(event){
		event.stopPropagation();
	});
});

//------------------- outfit creation layering ----------------//
$(function(){
	

	var itemWrapper = '';
	//for hold icon
	itemWrapper += '<li class="layers">';
	itemWrapper += '<div class="holdIconBox"><div class="holdIcon">Hold</div></div>';
	itemWrapper += '<span class="removeIcon">X</span>';
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

	function outfitStyle(id, title,url,price,smallImg,largeImg,layer,itemCategory){
	    this.idNum = id;
	    this.titleInfo = title;
	    this.urlInfo = url;
	    this.priceInfo = price;
		this.smallImageInfo = smallImg;
		this.largeImageInfo = largeImg;
		this.layerWrapper = layer;
		this.itemCategory = itemCategory;
	}		


	outfitStyle.prototype.createItemList = function(){
		//re-read the newly created item wrapper 
		var wrapper = $.parseHTML(this.layerWrapper);
		$("#sortable").prepend(wrapper);
		//assign the same id as selected image to the whole list wrapper
		$(wrapper).attr('id',this.idNum);
		$(wrapper).addClass(this.itemCategory);
		$(wrapper).find(".imageIconBox").children("a").append(this.smallImageInfo);
		$(wrapper).find(".titleOfProduct").append(this.titleInfo);
		$(wrapper).find(".url").append(this.urlInfo);
		$(wrapper).find(".price").append(this.priceInfo);
		$("#outfitItems").append(this.largeImageInfo);


		$('.removeIcon').click(function(event){
			$(this).parent().remove();
			var sameId = $(this).parent().attr('id');
			$("#outfitItems").find('#'+sameId).remove();
		});

	}

	$('.itemBoxImages').on("click",".items-wrapper",function(event){	
   		//take ID information here & get multiple images for different positions
   		//image for being on top of the other clothes
   		//image for being underneath the other clothes

   		var id = $(this).children('img').attr('id');
   		var title = "<a href='item.html'>test</a>"; //Ajax call
   		var url = "<a href='#''>test.html</a>"; //Ajax call
   		var price = "$30";//Ajax call
   		var sImage = $(this).children('img').clone(); //clone
   		var lImage = $(this).children('img').clone(); //Ajax call - most important
   		var category = "";//Ajax call 

   		var outfit = new outfitStyle(id, title,url,price,sImage,lImage,itemWrapper,category);

   		//this prevents duplicate item selection.
		var alreadySelected = 0;
		var layerItems =$(".layers");


   		if($(".layers").length == 0){

			outfit.createItemList();

   		}else{
			for(var i=0 ;i < $(".layers").length;i++){
				if(outfit.idNum == $(layerItems[i]).find("img").attr('id')){
					alreadySelected = 1;
				}else{
				};
			};

			if(alreadySelected == 0){

				outfit.createItemList();
			
			}else{
			
				return false;
			
			};
   		};
	});

	//remove the selected layer

	var sortableIn = 1;
	$("#sortable" ).sortable({
		stop: function(event, ui) {
			sortableIn = 1;
			var selected = $(ui.item);
			if($(selected).is('.jacket')){
				$(this).sortable('cancel');
			}else{
				//record the z-index of every itemBox		
				for(var k=0;k < $('.layers').length;k++){
					var itemArray = $('.layers')
					var itemId = $(itemArray[k]).attr('id')
					$("#outfitItems").find('#'+itemId).css('z-index',1000-k);
				};
				//modify the z-index of every itemBox
				var imageId = ui.item.attr('id');				
				var indexNum = ui.item.index();			
				var zindexNum = 1000 - indexNum;
				var num = parseInt(zindexNum);
				$('#outfitItems').find('#'+imageId).css('z-index',zindexNum);	
			};
		},
		out:function(event,ui){
			sortableIn = 0;
		},
		//beforeStop to remove items and maintain a sentinel based on the over and out to determine whether or not you've moved outside the bounds of the container.
        beforeStop: function (event, ui){
            if(sortableIn == 0){ 
            	ui.item.remove();
				var sameId = ui.item.attr('id');
				$("#outfitItems").find('#'+sameId).remove();
           };
        }
	});
    
    $("#sortable").disableSelection();


    //collage page
   // $( "#outfitItems" ).draggable({
   //     selected: function(event, ui){
   //         console.log(event);
   //         console.log(ui);
   //         var s=$(this).find('.ui-selected');
   //         console.log(s);
   //     }
   // });
		$("#clone").click(function(e){
			var itemsOnCanvas = $(".draggable > li");
			var imageWrapper = "<li></li>"	
			for(var i =0; i < itemsOnCanvas.length;i++){
				if($(itemsOnCanvas[i]).is(".selectedImg")){
					var cloneImage = $(itemsOnCanvas[i]).children("img").clone();
					var wrappedImage = $(imageWrapper).append(cloneImage);
					$(".draggable").append(wrappedImage);
					console.log(wrappedImage);
				}else{
					return false;
				}
			};
		});
		

		$( ".draggable > li" ).draggable({containment:".background_grid"});
		$(".draggable > li").mousedown(function(event){
			$(this).find(".ui-rotatable-handle").css({
				display:"block",
			});
			$(this).css({
				border:"1px solid rgb(70,120,100)"
			}).addClass("selectedImg");
			$(".draggable > li > .ui-resizable-handle").css("display","block");
		});
		

		$('.background_grid').click(function(event) {
			if($(event.target).is('img')){
				return false;
			}else{
				$(".draggable > li ").find(".ui-rotatable-handle").css({
					display:"none",
				});
				$(".draggable > li > .ui-resizable-handle").css("display","none");
				$(".draggable > li").css("border","none").removeClass("selectedImg");

			}
		});



		 

		$(".draggable  > li").resizable(
 			{aspectRatio: 1},
    		{handles: 'ne, se, nw, sw'}
		);

		 $(".draggable  > li").rotatable( );




		 

});
		


//----------------outfit creation clear function------------------//
$(function(){
	$(".submitPanel .button_clear").click(function(){
		$("#outfitItems").empty();
		$("#sortable").empty();
	});
});



//-----------------Modal box ----------------//
//--open and close modal box--//
$(function(){
	$('#tryonContent .button_publish').click(function(event){
		// popup warning when more than two outfits are not selected
		if($("#outfitItems img").length >= 2){
			$('#popup_overlay').fadeIn("fast");	
		}else{
			alert("Please choose at least three items");
		}
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


//start from here
$(function(){
	$('.button_medium.publish').click(function(event){
			
			var firstOptionCategory = $("#categorySelect option:selected").val();	
	 		var firstOptionSubCategory = $("#subCategorySelect option:selected").val();
	 		var titleRe = /[0-9,a-z,A-Z]/;
	 		var inputTitle = $(".title_box input").val();
	 		
	 		if(inputTitle.match(titleRe)){
				if(firstOptionSubCategory !== "0" && firstOptionCategory !== "0"){
					$('.createCollage').fadeIn();
					$('.publishes').hide();
				}else{
					alert("please choose a category and a sub-category");

				}
			}else{
				alert("Please fill out the title ( you can only use 0 ~9 and a ~ z )")
			};
		});
});

//-----------------Form entry - sub categories change based on the chosen category----------------//
$(function(){

	var optionStyle = $("<option value=0>Please choose a sub-category</option><option value='active'>Active</option><option value='basic'>basic</option><option value='businessCasual'>Business Casual</option><option value='bohemian'>Bohemian</option><option value='casual'>Casual</option><option value='classic'>Classic</option><option value='comfortable'>Comfortable</option><option value='celebrity'>Celebrity</option><option value='cute'>Cute</option><option value='elegant'>Elegant</option><option value='formal'>Formal</option><option value='goth'>Goth</option><option value='preppy'>Preppy</option><option value='punk'>Punk</option><option value='runway'>Runway</option><option value='sexy'>Sexy</option><option value='swimwear'>Swimwear</option><option value='vintage'>Vintage</option>");
	var optionOccasion = $("<option value=0>Please choose a sub-category</option><option value='casualDate'>Casual Date</option><option value='classyDate'>Classy Date</option><option value='everyday'>Everyday</option><option value='formalEvents'>Formal Events</option><option value='nightOut'>Night Out</option><option value='outdoorActivities'>Outdoor Activities</option><option value='work'>Work</option>");
	var optionSeason = $("<option value=0>Please choose a sub-category</option><option value='spring'>Spring</option><option value='midSpring'>Mid-Spring</option><option value='summer'>Summer</option><option value='fall'>Fall</option><option value='midFall'>Mid-Fall</option><option value='winter'>Winter</option>");
	var optionWeather = $("<option value=0>Please choose a sub-category</option><option value='warm'>Warm</option><option value='freezing'>Freezing</option><option value='cold'>Cold</option><option value='raining'>Raining</option><option value='hot'>Hot</option><option value='snowing'>Snowing</option><option value='tropical'>Tropical</option>");
	
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
	$(".controlBoxes > li").click(function(){
		$(this).children().children(".subHeader-submenu").slideToggle(200);
	});

	$('html').click(function(event){
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
    $("#itembox_header ul li").click(function() { 
        $(this).addClass("currently_focus");
        $("#itembox_header > ul > li").not(this).removeClass("currently_focus");
        $(".itemBoxImages").hide();
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
        $("#beautyList,#beautyImages > .itemBoxImages").show();
		$(".itembox_subHeader > div,.itemBox > .itemIconsWrapper").not("#beautyList,#beautyImages > .itemIconsWrapper").hide();
 	}); 
    
    $(".itemList_people").click(function() { 
        $("#peopleList,#peopleImages > .itemBoxImages").show();
        $(".itembox_subHeader > div,.itemBox > .itemIconsWrapper").not("#peopleList,#peopleImages > .itemIconsWrapper").hide();
 	}); 
});

//-------order box changes based on the selected element------------//
$(function(){
	$(".subHeader-list.order .submenu-second li").click(function(){
		var selectedOrder = $(this).text();
		$(".subHeader-list.order span").text(selectedOrder);
	});
});

//--items show up--//
$(function() { 
 	$(".itemBox > .itemIconsWrapper > li, .subHeader-submenu > ul > li").click(function() { 
        $(".itemBox > .itemIconsWrapper").hide();
 	});                                     
    
    $("#myItemImages > .itemIconsWrapper > li, #myItemList .subHeader-submenu > ul > li").click(function() { 
        $("#myItemImages > .itemBoxImages").show(); 
 	});
    
    $("#clothingImages > .itemIconsWrapper > li,#clothingItemList .subHeader-submenu > ul > li").click(function() { 
        $("#clothingImages > .itemBoxImages").show(); 
 	}); 
    
    $("#modelImages > .itemIconsWrapper > li").click(function() { 
        $("#modelImages > .itemBoxImages").show(); 
 	}); 
    
    $("#embelishmentImages > .itemIconsWrapper > li,#embelishmentList .subHeader-submenu > ul > li").click(function() { 
        $("#embelishmentImages > .itemBoxImages").show(); 
 	});   	
    
    $("#itemImages > .itemIconsWrapper > li, #itemList .subHeader-submenu > ul > li").click(function() { 
        $("#itemImages > .itemBoxImages").show(); 
 	});
});



//----------------Confirmation popup for leaving the page-----------------//
$(function(){
	$("#tryclothes #header a, #collage #header a").click(function(event) {
		$(window).bind('beforeunload', function(){
			return 'Your creation will be lost if you do not submit it';
		});
		$('a.noUnloadMessage').on('click', function(e){
        	$(window).unbind('beforeunload');
		});
	});
});


//------------------Try on / collage creation form that makes sure users input correct data------------//
$(function(){


});

//********************Shop html********************//
//--Top selling item hover effect--//
$(function(){
	$(".topSellingBox li a").hover(function(){			
	    $(this).children(".popupBox").slideToggle(130)},function(){
		$(this).children(".popupBox").slideToggle(130);
	});
});


//--Top selling jump direclty to the items--//
//$(function(){
//	$(".topSellingBox li").click(function(){			
//		var $category_name = $(this).children(".popupBox").children('span').clone();
//
//		$(".item-guides > ul > .firstChild > .main").html($category_name.html());
//
//		var $category_overall = $(this).attr("class").split(' ')[0];
//		var $category_each = $(this).attr("class").split(' ')[1];
//		var $selected = $(".sideMenu > ul > li > div." + $category_overall);
//		
//		$('.middle .submenu_second > ul > li.' + $category_each).children("span").addClass('current');
//
//		$('.selectBox > div > select[name="sort"]').val("popular").trigger('change');
//
//		$selected.show();
//			
//		$(".sideMenu > ul > li .submenu_second").not($selected).hide();		
//
//		$("#footer").hide();
//		$(".button_about").show();
//
//	});
//});



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

	$('.icon_close,.button_medium.cancel').click(function(event){
		$('#quickView,#editProfile,#changePic').hide();});

	$('.popup-box').click(function(event){
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
		$(".itemDetails-tabs > ul > li > span").not(currentTab).removeAttr('id',"");
		$(".itemDetails-tabs > ul > li > div").not(currentBox).hide();
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
		alert("Your book is overdue.");
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
		$("#login").fadeIn(1000);
	});

	$("#login .firstList").click(function(){
		$("#login").hide();
		$("#signup").fadeIn(1000);
	});
});

//--personal information--//
$(function(){
	$(".move").click(function(){
		$("#moveToPersonal").hide();
		$("#personalInfo").fadeIn(1000);
	});
});

//----------This seems to have problems----------------Jquery UI-------------------------------------//
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
