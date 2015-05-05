$(document).ready(function() {
    $(".interest-selection a").click(function(event) {
    	event.preventDefault();
    	$( ".all" ).fadeOut(100);
        $("."+event.target.id+"").fadeIn(250);
    });
});