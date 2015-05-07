$(document).ready(function() {
    $(".interest-selection a").click(function(event) {
    	event.preventDefault();
    	$( ".all" ).fadeOut(100);
        $("."+event.target.id+"").fadeIn(250);
    });
});

$(".gallery-iframe").fancybox({
		maxWidth	: 800,
		fitToView	: true,
		width		: '70%',
		height		: '90%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});