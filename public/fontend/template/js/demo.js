//fixed-nav
$(document).on("scroll",function(){
	if($(document).scrollTop()>20){ 
		$("header").removeClass("large").addClass("small");
	}
	else{
		$("header").removeClass("small").addClass("large");
	}
});

  $(document).ready(function(){
	$("#floatHide01").hide();	
	
	$("#floatShow01").click(function(){
		
		$("#online").animate({width:"show", opacity:"show"}, "normal" ,function(){
			$("#online").show();
			$("#floatHide01").show();
			$("#floatShow01").hide();
		})	
		});
	$("#floatHide01").click(function(){
		
		$("#online").animate({width:"hide", opacity:"hide"}, "normal" ,function(){
			$("#online").hide();
			$("#floatShow01").show();
			$("#floatHide01").hide();
			
		})
		
});
		
  
});
//back-top
$(function(){
	$(window).scroll(function(){
		var _top = $(window).scrollTop();
		if(_top>300){
			$('.back_top').fadeIn(600);
		}else{
			$('.back_top').fadeOut(600);
		}
	});
	$(".back_top").click(function(){
		$("html,body").animate({scrollTop:0},500);
	});
});

$(window).load(function(){

	$("#flexiselDemo2").flexisel({
		visibleItems: 4,
		animationSpeed: 1000,
		autoPlay: true,
		autoPlaySpeed: 5500,    		
		pauseOnHover: true,
		enableResponsiveBreakpoints: true,
    	responsiveBreakpoints: { 
    		portrait: { 
    			changePoint:450,
    			visibleItems: 1
    		}, 
    		landscape: { 
    			changePoint:620,
    			visibleItems: 2
    		},
    		tablet: { 
    			changePoint:991,
    			visibleItems: 3
    		}
    	}
    });
	
});

$(document).ready(function(){

    $("#floatShow").bind("click",function(){
	
        $("#onlineService").show();
		
        $("#floatShow").attr("style","display:none");
        $("#floatHide").attr("style","display:block");
		
        return false;
    });
	
    $("#floatHide").bind("click",function(){
	
        $("#onlineService").hide();
		
        $("#floatShow").attr("style","display:block");
        $("#floatHide").attr("style","display:none");
		
        return false;
    });
  
});



