$(document).ready(function() {
    $(".interest-selection a").click(function(event) {
    	event.preventDefault();
    	$( ".all" ).fadeOut();
        $("."+event.target.id+"").fadeIn(250);
    });
});