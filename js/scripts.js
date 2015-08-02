$(document).ready(function() {
	$('main.l-main .loop-thumbnail-wrapper').infinitescroll({
	 
	    navSelector  : "div.load_more_cont",            
	                   // selector for the paged navigation (it will be hidden)
	    nextSelector : "div.load_more_cont a:first",    
	                   // selector for the NEXT link (to page 2)
	    itemSelector : "main.l-main .loop-thumbnail-item"
	                   // selector for all items you'll retrieve
	  }, function(arrayOfNewElems){
	  
	  
	     // optional callback when new content is successfully loaded in.
	 
	     // keyword `this` will refer to the new DOM content that was just added.
	     // as of 1.5, `this` matches the element you called the plugin on (e.g. #content)
	     //                   all the new elements that were found are passed in as an array
	 
	  });  


	$('.menu-burger').click(function() {
		$('body').toggleClass('menu-open');
	});

	$('.menu-item.no-hover').click(function(event) {
		$(this).toggleClass('is-active');
	});

});
