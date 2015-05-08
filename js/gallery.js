$(document).ready(function() {
    $(".interest-selection a").click(function(event) {
    	event.preventDefault();
    	$( ".all:visible" ).hide(100);
        $("."+event.target.id+"").show(250);
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