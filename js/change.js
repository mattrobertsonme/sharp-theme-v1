$(document).ready(function() {
	
/* -----------------------------------------------------------------------------
	
	=OPEN AND CLOSE MODIFY WINDOW
  
----------------------------------------------------------------------------- */
	
	// CLOSE WINDOW 
	$("#closeWindow").click(function () {
    	$('footer').addClass('move-out');
    });
	
	// OPEN WINDOW 
	$("#openWindow").click(function () {
    	$('footer').removeClass('move-out');
    });
	
/* -----------------------------------------------------------------------------
	
	=REMOVE/ADD FEATURED ZONE
  
----------------------------------------------------------------------------- */
	
	// SHOW BOXED
	$("#featuredOn").click(function () {
    	$('body').addClass('featured-content-off');
    });
	
	// HIDE BOXED
	$("#featuredOff").click(function () {
    	$('body').removeClass('featured-content-off');
    });
	
/* -----------------------------------------------------------------------------
	
	=CHANGE LAYOUT 
  
----------------------------------------------------------------------------- */
	
	// FULL WIDTH
	$("#style1").click(function () {
    	$('body').addClass('style1');
		$('body').removeClass('style2');
		$('body').removeClass('style3');
    });
	
	// MODULE LAYOUT
	$("#style2").click(function () {
    	$('body').removeClass('style1');
		$('body').addClass('style2');
		$('body').removeClass('style3');
    });
	
	// BOXED LAYOUT 
	$("#style3").click(function () {
    	$('body').removeClass('style1');
		$('body').removeClass('style2');
		$('body').addClass('style3');
    });
	
/* -----------------------------------------------------------------------------
	
	=COLOURS
  
----------------------------------------------------------------------------- */
	
	// SOLID COLOUR
	$("#toggleColour").click(function () {
		$('body').addClass('patterns');
        $('body').removeClass('add-image');
    });
	
	// COLOURS = BLUE	
    $("#toggleBlue").click(function () {
        $('body').removeClass('red green orange purple');
    });
    
	// COLOURS = RED		
	$("#toggleRed").click(function () {
        $('body').addClass('red');
		$('body').removeClass('green orange purple');
    });
	
	// COLOURS = GREEN
	$("#toggleGreen").click(function () {
        $('body').addClass('green');
		$('body').removeClass('red orange purple');
    });
	
	// COLOURS = ORANGE
	$("#toggleOrange").click(function () {
        $('body').addClass('orange');
		$('body').removeClass('red green purple');
    });
	
	// COLOURS = PURPLE
	$("#togglePurple").click(function () {
        $('body').addClass('purple');
		$('body').removeClass('red green orange');
    });
    
});    