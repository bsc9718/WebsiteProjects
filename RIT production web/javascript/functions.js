/**
 * Ernesto Soltero (ernesto.soltero11@gmail.com)
 * Utility Functions to support pages
 */

$(document).ready(function(){

	$("#accordion_1").on("click", function(){
		$('#accordion_1_response').toggle();
		if ( $("#accordion_1_response").is(':visible') ) {
  $( "#accordion_1" ).html("<u>Read less</u>");
} else{
 $( "#accordion_1" ).html("<u>Read more</u>");
}	

		
	});
	
	$("#accordion_2").on("click", function(){
		$('#accordion_2_response').toggle();	
		if ( $("#accordion_2_response").is(':visible') ) {
  $( "#accordion_2" ).html("<u>Read less</u>");
} else{
 $( "#accordion_2" ).html("<u>Read more</u>");
}	
	});
	
	$("#menu_contents .menu").mouseover(function(){
		$("#menu_contents .item").addClass("hold");
	});
	$("#menu_contents .menu").mouseout(function(){
		$("#menu_contents .item").removeClass("hold");
	});

	
});