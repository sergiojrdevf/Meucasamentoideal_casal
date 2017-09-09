$(document).ready(function(){
	$('.hamburger').click(function() {
		$(this).toggleClass('is-active');
		 if($(".nav-content").hasClass('showMenu')) {
			$(".nav-content").removeClass('showMenu').slideUp('slow');
		} else {
			$(".nav-content").addClass('showMenu').slideDown('slow');	 
	 	}  
	});
	
	$(document).on('submit', "form", function(e) {
		$(this).find('.submit').prop('disabled', true).addClass('disabled');
	});

	$('.btn-acount').click(function() {
		$('.modal').addClass('active');
	});

	$('#create-login').validate({
	  rules: {
	    user_name: {
	    	required: true
		},
	    user_email: {
	      required: true,
	      email: true
	    },
		user_pass: {
			required: true,
			minlength: 6
		},
		user_repass: {
			required: true,
			minlength: 6,
			equalTo: "#user_pass"
		},
	  },
	  messages: {
	    user_name: "Digite seu nome.",
	    user_email: {
	      required: "Digite seu e-mail.",
	      email: "Digite um e-mail válido."
	    },
	    user_pass: {
			required: 'Digite sua senha',
			minlength: 'Digite uma senha com no mínimo 6 caracteres.'
	    },
	    user_repass: {
	    	required: 'Digite sua senha',
	    	minlength: 'Digite uma senha com no mínimo 6 caracteres.',
			equalTo: 'Por favor, confirma sua senha.'
	    }
	  }
	});

 	function setRadio() {
 		setTimeout(function() {
 			$('.owl-item.active').find($('input:radio')).prop('checked', true);
 		}, 100);
 	}

 	setRadio();

 	$(".owl-carousel").on('changed.owl.carousel', function() {
 		setRadio();
 	});

 	$('.change-dashboard').click(function(e){
 		$('.change-dashboard').removeClass('active');
 		$('.dashboard-view').removeClass('active');
 		$(this).addClass('active');
 		$('.dashboard').find("[data-show='" + $(this).data().menu + "']").addClass('active');
 		e.preventDefault();
 	}); 


	$('.btn-close').click(function(e) {
		$('.modal').removeClass('active');
		e.preventDefault();
	});

	$('.send-recado').click(function(e) {
		$('.modal').addClass('active');
		e.preventDefault();
	});
});

$(window).on('load', function() {
 	$(".slidersingle").owlCarousel({
	    autoHeight: true,
	    items:1,
	    nav: true,
	    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>']
 	});
  
 	$(".slidertestimonial").owlCarousel({
	    autoHeight: true,
		responsive : {
		    0 : {
		        items:1,
		    },
		    768 : {
		       items:2, 
		    }
		},
	    loop:true,
	    nav: false,
		autoplay:true,
		autoplayTimeout:3000,
		autoplayHoverPause:false, 
	    // nav: true,
	    // navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>']
 	});

 	$("#sliderhome").owlCarousel({
	    items:1,
	    loop:true,
	    nav: false,
		autoplay:true,
		autoplayTimeout:3000,
		autoplayHoverPause:false, 
 	});
});


(function($) {

/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function new_map( $el ) {
	
	// var
	var $markers = $el.find('.marker');
	
	
	// vars 
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};
	
	
	// create map	        	
	var map = new google.maps.Map( $el[0], args);
	
	
	// add a markers reference
	map.markers = [];
	
	
	// add markers
	$markers.each(function(){
		
    	add_marker( $(this), map );
		
	});
	
	
	// center map
	center_map( map );
	
	
	// return
	return map;
	
}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/
// global var
var map = null;

$(document).ready(function(){

	$('.acf-map').each(function(){

		// create map
		map = new_map( $(this) );

	});

});

})(jQuery);