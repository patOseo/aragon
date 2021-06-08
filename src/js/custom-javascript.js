// Add your custom JS here.

jQuery(function($){

	$('.affiliations').slick({
	  infinite: true,
	  slidesToShow: 5,
	  slidesToScroll: 1,
	  responsive: [
  	    {
  	      breakpoint: 1400,
  	      settings: {
  	        slidesToShow: 4,
  	        slidesToScroll: 1,
  	        infinite: true,
  	        dots: true
  	      }
  	    },
  	    {
  	      breakpoint: 1024,
  	      settings: {
  	        slidesToShow: 3,
  	        slidesToScroll: 1
  	      }
  	    },
  	    {
  	      breakpoint: 768,
  	      settings: {
  	        slidesToShow: 1,
  	        slidesToScroll: 1
  	      }
  	    }
  	  ]
  	});

});