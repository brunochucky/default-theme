/* global wp, jQuery */

$(document).ready(function() {
	$('.number_counter').countUp();		
});


$(window).on('load',function(){
	
	if($('#works').length)
		$('#works').masonry({
		  // options
		  itemSelector: '.grid-item',
		  columnWidth: 350,
		  gutter: 30
		});

	if($('#history').length)
		$('#history').masonry({
		  // options
		  itemSelector: '.grid-item',
		  columnWidth: 350,
		  gutter: 30
		});

	if($('#avenda').length)
		$('#avenda').masonry({
		  // options
		  itemSelector: '.grid-item',
		  columnWidth: 350,
		  gutter: 30
		});


	

});