jQuery(document).ready(function(){

	// add link back to galleries page
	var url = window.location.href;
	jQuery('<p><a class="linkbutton" href="'+url.substring(0,url.indexOf("?"))+'">Back to Galleries</a></p>').insertBefore('div.slideshowlink');

});