/*
(c) 2011 Vadim Skyba | sineloco@mail.ru
*/

function window_resize ()
{
	// IE fixes
	var msiePattern = /.*MSIE ((\d+).\d+).*/ 
	if(msiePattern.test(navigator.userAgent))
	{
		ie_window_resize();
	}
	
	title_resize ();
}

function title_resize ()
{
	var container = document.getElementById("content_header");
	var img = document.getElementById("content_header_img");
	var title_p = document.getElementById("content_header_h1");	
	var title_span = document.getElementById("content_header_span");

	if( container && img && title_p && title_span)
	{
		var img_width = parseInt(20 + title_span.offsetWidth * 1.06);
		
		var title_p_paddingLeft = 10 + parseInt(title_span.offsetWidth * 0.02);
		title_p.style.paddingLeft = title_p_paddingLeft + "px";
		title_p.style.paddingRight = title_p_paddingLeft + parseInt(img_width*0.015) + "px";
		//title_p.style.paddingRight = title_p_paddingLeft + "px";
		
		title_p.style.paddingTop = parseInt(8.0 + title_span.offsetHeight * 0.05 + title_span.offsetWidth * 0.003) + "px";
		title_p.style.paddingBottom = parseInt(9.0 + title_span.offsetHeight * 0.06 + title_span.offsetWidth * 0.004) + "px";

		// Centering image
		// var offset = parseInt(title_span.offsetLeft + title_span.offsetWidth/2 - img_width/2) - document.documentElement.scrollLeft;

		var offset = parseInt((container.offsetWidth - img_width) / 2);
		img.style.left = offset + "px";

		// IE6 Warning! Resizing does't works for .png images
		img.style.width = (img_width < container.offsetWidth) ? (img_width + "px") : (container.offsetWidth + "px");
		img.style.height = container.offsetHeight + "px";
	}
}

window.onload = window_resize;
window.onresize = window_resize;