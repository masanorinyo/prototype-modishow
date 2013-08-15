//********************General functions********************//
//--Click event to scroll to top--//
$(document).ready(function(){
	$('#modalbox-backToTop').click(function(){
		$('#modalbox').animate({scrollTop : 0},800);
		return false;
	});
	$('#body_back').click(function(){
		$('html, body').animate({ scrollTop: 0 }, 800);	
		return false;
	});
});

//--heart fillup--//
$(document).ready(function(){
	$(".button-heart").click(function(){
		$(this).children('.heart_filled').fadeToggle("fast");
	});
	$(".button_grey_medium").click(function(){
		$(this).children(".mediumButton-leftside").children('.heart_filled').fadeToggle("fast");
	});
	$(".button_grey_medium").click(function(){
		$(this).children(".mediumButton-leftside").children('heart_filled').children(span).css('color','white');
	});
	$(".itemDetails-heart").click(function(){
		$(this).children().next(".heart_filled").fadeToggle("fast");
	});
	$(".itemHeart").click(function(){
		$(this).children('.heart_filled').fadeToggle("fast");
	});
});










//********************Index html********************//
//---------------------Modal box---------------------//
//--Open and close modal box--//
$(document).ready(function(){
	$('.openModal').click(function(event){
		$('#popupOverlay').show();
	});
	$('.openModal').click(function(event){
		$('html').css("overflow", "hidden");
	});
	$('.openModal').click(function(event){
		$('#body_back').css("display", "none");
	});
	$('#modalbox').click(function(event){
		$('#modalbox-backToTop').css("display", "block");
	});
	$('.openModal').click(function(event){
		$('#modalbox').scrollTop(0);
	});
	$("#modalbox").click(function(event){
		$('#popupOverlay').hide();
	});	
	$('.closeBox').click(function(event){
		$('#popupOverlay').hide();
	});
	$('.closeBox').click(function(event){
		$('html').css("overflow","visible"); 
	});
	$('#modalbox').click(function(event){
		$('html').css("overflow","visible"); 
	});
	$('#modalbox').click(function(event){
		$('#body_back').css("display", "none");
	});
	$('#modalbox').click(function(event){
		$('#modalbox-backToTop').css("display", "none");
	});
	$('.popup-mainContainer,.popup-side_top,.popup-side_bottom,.popup-comment,.popup-side_middle').click(function(event){
		event.stopPropagation();
	});
});

//--back to top button--//
$(document).ready(function(){
	$(window).scroll(function(){
		if ($(this).scrollTop() < 650) {
			$('#body_back').slideUp();
		} else {
			$('#body_back').slideDown();
		}
	});
	$("#modalbox").scroll(function(){
		if ($(this).scrollTop() < 650) {
			$('#modalbox-backToTop').slideUp();
		} else {
			$('#modalbox-backToTop').slideDown();
		}
	});
});

//--header fix position--//
$(document).ready(function(){
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
$(document).ready(function(){
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
$(document).ready(function(){
   	$(".collageBox,.styleTitle > .openModal").click(function(){
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
$(document).ready(function(){
	$(".content-small,.content-large").hover(function(){
		$(this).children(".button-heart,.button-flip").fadeIn("fast");},function(){
		$(this).children(".button-heart,.button-flip").fadeOut("fast");
	});
});

//--flip individual effect--//
$(document).ready(function(){
	var toggleStateSingle = true;
	$('.button-flip').on("click", function(){
	  if(toggleStateSingle) {
	     $(this).next().next(".modelBox").fadeIn();
	  } else {
	    $(this).next().next(".modelBox").fadeOut();
	  }
	  
	  toggleStateSingle = !toggleStateSingle;
	});

	var toggleStateSingleCategory = true;
	$('.button-flip').on("click", function(){
	  if(toggleStateSingleCategory) {
	     $(this).next().next().next().next().children().children().next().children().next('.style-category').fadeOut();
	  } else {
	    $(this).next().next().next().next().children().children().next().children().next('.style-category').fadeIn();
	  }
	  
	  toggleStateSingleCategory = !toggleStateSingleCategory;
	});
});

//---------------------Sticky navi---------------------//
//--hover effect for sticky navi--//
$(document).ready(function(){
	$(".submenu-secondWrapper").hover(function(){
		$(this).children(".background_white.stickynavi-submenu-second").fadeIn("fast");},function(){
		$(this).children(".background_white.stickynavi-submenu-second").fadeOut("fast");
	});
	$(".stickynavi-submenu").children().children().hover(function(){
		$(this).children(".stickynavi-submenu-second").fadeIn("fast");},function(){
		$(this).children(".stickynavi-submenu-second").hide();
	});
});

//--sticky navi fix navi--//
$(document).ready(function(){
    $(window).scroll(function(){
        var scrollTop = 50;
        
        if($(window).scrollTop() >= scrollTop){
            $('#stickynaviWrapper').css({
                position : 'fixed',
                top : '0',
            });
        }

        if($(window).scrollTop() < scrollTop){
            $('#stickynaviWrapper').removeAttr('style'); 
        }
    })
});

//--flip all effect--//
$(document).ready(function(){
	var toggleState = true;
	
	$('#flip_button').on("click", function(){
		if(toggleState) {
	    	$(".modelBox,.styleTitle,.style-category").fadeIn();
  		} else {
	    	$(".modelBox").fadeOut();
	  	}
	
	toggleState = !toggleState;
	});

	var toggleStateCategory = true;
	
	$('#flip_button').on("click", function() {
  		if(toggleStateCategory) {
	    	$(".style-category").fadeOut();
	  	} else {
	    	$(".style-category").fadeIn();
		}
	
	toggleStateCategory = !toggleStateCategory;
	});
});

//--search box appears--// 
$(document).ready(function(){
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
$(document).ready(function(){
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
$(document).ready(function(){
	$(".stickynavi-menu").click(function(){
		$(this).children('.stickynavi-submenu').fadeToggle("fast");});			
	
	$(".stickynavi-menu").click(function() {
	    if( $(this).children(".stickynavi-submenu").is("display","block") ) {
	        $(this).children(".stickynavi-submenu").hide();
	    } else {
	        // if other menus are open remove open class and add closed
	        $(this).siblings().children(".stickynavi-submenu").is("display","block"); 
	        $(this).siblings().children(".stickynavi-submenu").hide();
	    }
	});

	$('html').click(function(event){
             $('.stickynavi-submenu').hide();
         });

	$('.stickynavi-menu,.stickynavi-submenu-second,.stickynavi-submenu').click(function(event){
			event.stopPropagation();
	});	
});










//********************Tryon html********************//
//-----------------left side ----------------//
//--hover effect--//
$(document).ready(function(){
	$("#tryonContent-left").hover(function(){
		$(".hide").fadeIn("fast");},function(){
		$(".hide").fadeOut("fast");
	});
});

//--appears & disappears for category and layer button--//
$(document).ready(function(){
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

//-----------------Modal box ----------------//
//--open and close modal box--//
$(document).ready(function(){
	$('.button_publish').click(function(event){
		$('#popupOverlay').fadeIn("fast");
	});

	$("#modalbox").click(function(event){
			$('#popupOverlay').hide();
			$('#createCollage').hide();
			$('#publish').fadeIn("fast");
		});	

	$('.close,.button_medium.cancel').click(function(event){
		$('#popupOverlay').hide();});

	$('.button_publish,.popup_confirmation').click(function(event){
		event.stopPropagation();
	});

 	$('.button_medium.publish').click(function(event){
		$('#createCollage').fadeIn();
		$('#publish').hide();
	});
});

//-----------------Right side (item box)----------------//
//--item box header-//
$(document).ready(function(){
	$(".subHeader-left > li").click(function(){
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
	
	$('.subHeader-left > li').click(function(event){
		event.stopPropagation();
	});	
});

//--dropdown for category box--//
$(document).ready(function(){
	$(".parent-submenu").hover(function(){			
	    $(this).children(".hiddenBox-submenu").fadeIn(100)},function(){
		$(this).children(".hiddenBox-submenu").fadeOut(100);
	});
});

//--item box sub header--//
//sub header changes according to a selected header//
$(document).ready(function() {
    $("#itembox_header ul li").click(function() { 
        $(this).addClass("currently_focus");
        $("#itembox_header > ul > li").not(this).removeClass("currently_focus");
        $(".itemBox-images").hide();
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
    
    $(".itemList_background").click(function() { 
        $("#backgroundList,#backgroundImages > .itemIconsWrapper").show();
        $(".itembox_subHeader > div,.itemBox > .itemIconsWrapper").not("#backgroundList,#backgroundImages > .itemIconsWrapper").hide();		
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
        $("#beautyList,#beautyImages > .itemBox-images").show();
		$(".itembox_subHeader > div,.itemBox > .itemIconsWrapper").not("#beautyList,#beautyImages > .itemIconsWrapper").hide();
 	}); 
    
    $(".itemList_people").click(function() { 
        $("#peopleList,#peopleImages > .itemBox-images").show();
        $(".itembox_subHeader > div,.itemBox > .itemIconsWrapper").not("#peopleList,#peopleImages > .itemIconsWrapper").hide();
 	}); 
});

//--items show up--//
$(document).ready(function() { 
 	$(".itemBox > .itemIconsWrapper > li, .subHeader-submenu > ul > li").click(function() { 
        $(".itemBox > .itemIconsWrapper").hide();
 	});                                     
    
    $("#myItemImages > .itemIconsWrapper > li, #myItemList .subHeader-submenu > ul > li").click(function() { 
        $("#myItemImages > .itemBox-images").show(); 
 	});
    
    $("#clothingImages > .itemIconsWrapper > li,#clothingItemList .subHeader-submenu > ul > li").click(function() { 
        $("#clothingImages > .itemBox-images").show(); 
 	}); 
    
    $("#modelImages > .itemIconsWrapper > li").click(function() { 
        $("#modelImages > .itemBox-images").show(); 
 	}); 
    
    $("#backgroundImages > .itemIconsWrapper > li,#backgroundList .subHeader-submenu > ul > li").click(function() { 
        $("#backgroundImages > .itemBox-images").show(); 
 	}); 
    
    $("#embelishmentImages > .itemIconsWrapper > li,#embelishmentList .subHeader-submenu > ul > li").click(function() { 
        $("#embelishmentImages > .itemBox-images").show(); 
 	});   	
    
    $("#itemImages > .itemIconsWrapper > li, #itemList .subHeader-submenu > ul > li").click(function() { 
        $("#itemImages > .itemBox-images").show(); 
 	});
});







//********************Shop html********************//
//--Top selling item hover effect--//
$(document).ready(function(){
	$(".topSellingBox li").hover(function(){			
	    $(this).children(".hiddenBox").slideToggle(130)},function(){
		$(this).children(".hiddenBox").slideToggle(130);
	});
	$('.topSellingBox li').click(function(event){
		event.stopPropagation();
	});
});

//--Side menu toggle--//

$(document).ready(function(){
	$(".sideMenu > ul > li").not(".titleHeader").click(function(){
		var currentDropdown = $(this).children(".submenu-secondLevel")

		$(currentDropdown).slideToggle(200);
		$(".submenu-secondLevel").not(currentDropdown).slideUp("fast");		

	});
	$('.submenu-secondLevel').click(function(event){
		event.stopPropagation();
	});
});
