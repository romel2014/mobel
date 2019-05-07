$(document).ready(function(){



	//****************************************
 	//	   Testimonial Carousel
 	//****************************************

  $('#testimonials').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:false,
	    autoplay:true,
	    dots:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
	});



  	//****************************************
 	//	    Show Search	
 	//**************************************** 

   	$("#show-search").click(function(){
	  $("#search").slideToggle( "slow" );	  
	});



 

 	//****************************************
 	//	    Customization Steps	
 	//****************************************

	$(".option-dependent-hidden").hide();

	$("#sliding").click(function(){
		$(".option-dependent-hidden").show();
	});

	$("#hinged").click(function(){
		$(".option-dependent-hidden").hide();
	});

	$("#next").click(function(){
	  	 	

	  	/* bullets */ 	
		$(".steps-bullet").find('li.active').next().addClass('active');


		/* list-progress */ 	
		$(".list-progress").find('li.active').next().addClass('active');
		

		/* step-box  show hide */
	    $(".step-box.active").next().addClass('active');
		$(".step-box.active").prev().removeClass('active');		

	});



	$("#prev").click(function(e){

		/* bullets */ 
		if($('.steps-bullet li').hasClass('active') && $('.steps-bullet li')[1].classList.length == 1  ) {		
			$(".steps-bullet").children('li.active').last().removeClass("active");
		}else {
			e.preventDefault();		
		}

		/* bullets */ 
		if($('.list-progress li').hasClass('active') && $('.list-progress li')[1].classList.length == 1  ) {		
			$('.list-progress').children('li.active').last().removeClass("active");
		}else {
			e.preventDefault();		
		}

		/* step-box  show hide */
		if($('.box-list .step-box').hasClass('active') && $('.box-list .step-box')[0].classList.length == 1 ) {	
			$(".step-box.active").prev().addClass('active');	
			$(".box-list").children('.step-box.active').last().removeClass("active");
					
		}else {
			e.preventDefault();		
		}
	});	


	$('.add-price').on('change', function() {

		var price   = ( this.value );
		
		var subtotal = $("#total-price").val();

		var total = (subtotal += price);

		$("#total-price").text("$" + total);
	     
	});


});