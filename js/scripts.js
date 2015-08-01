$(document).ready(function() {
	$('#content_inside').infinitescroll({
	 
	    navSelector  : "div.load_more_text",            
	                   // selector for the paged navigation (it will be hidden)
	    nextSelector : "div.load_more_text a:first",    
	                   // selector for the NEXT link (to page 2)
	    itemSelector : "#content_inside .loop-thumbnail-wrapper"
	                   // selector for all items you'll retrieve
	  },function(arrayOfNewElems){
	  
	  
	     // optional callback when new content is successfully loaded in.
	 
	     // keyword `this` will refer to the new DOM content that was just added.
	     // as of 1.5, `this` matches the element you called the plugin on (e.g. #content)
	     //                   all the new elements that were found are passed in as an array
	 
	  });  


});
