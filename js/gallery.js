$('a').click(function(){
	console.log(this.class);
	// this can probably be a switch case but for now i'm lazy and it works
	if (this.value == "motion"){
		$( ".all" ).fadeOut(100)
		$( ".motion" ).fadeIn(250)		
	};
	if (this.value == "video"){
		$( ".all" ).fadeOut(100)
		$( ".video" ).fadeIn(250)		
	};
	if (this.value == "design"){
		$( ".all" ).fadeOut(100)
		$( ".design" ).fadeIn(250)		
	};
	if (this.value == "web"){
		$( ".all" ).fadeOut(100)
		$( ".web" ).fadeIn(250)		
	};
	if (this.value == "all"){
		$( ".all" ).fadeOut(100)
		$( ".all" ).fadeIn(250)		
	};
});
