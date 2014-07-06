/*
(c) 2011 Vadim Skyba | sineloco@mail.ru
*/

function ie_window_resize ()
{
	var msiePattern = /.*MSIE ((\d+).\d+).*/ 
	var agent = navigator.userAgent; 
	var ie_ver = msiePattern.test(agent) ? parseInt(agent.replace(msiePattern,"$2")) : 0;

	var container;

	if(ie_ver <= 6)
	// Resize Layout. Fix for non-supported css in IE6: min-width, min-height
	{
		container = document.getElementById("layout");
		//container.style.width = (document.body.clientWidth <= 950+1) ? "950px" : ((document.body.clientWidth > 1300) ? "1300px" : "auto");
		container.style.width = (document.body.clientWidth <= 950+1) ? "950px" : "auto";
	}

	// Vertical alignment for IE6/IE7 (Non supported css: display: table; display: table-cell;) and IE8+ (IE7 compatible mode)
	container = document.getElementById("ie_centering");
	if(container)
	{
		vertical_centering(container);
		//list_horisontal_centering(container);
	}

}

function vertical_centering (container)
{
	//container.style.marginTop = (container.parentNode.offsetHeight - container.offsetHeight) < 0 ? "0" : ((container.parentNode.offsetHeight - container.offsetHeight)/2 + "px");
	container.style.marginTop = (container.parentNode.offsetHeight - container.offsetHeight) < 0 ? "0" : (parseInt((container.parentNode.offsetHeight - container.offsetHeight)/2) + "px");
}

function list_horisontal_centering (container)
// Horizontal centering for horizontal list only
{
	if(container.childNodes.length > 0)
	{
		var width = 0;
		var lineOffsetTop = container.childNodes[0].offsetTop;
		
		for (var i = 0; i < container.childNodes.length; i++)
		{
			if (container.childNodes[i].offsetTop == lineOffsetTop) {
				width += container.childNodes[i].offsetWidth;
			}
			else {
				// List is more then one line height. Don't centering it.
				return;
			}
		}
		
		container.style.marginLeft = (container.parentNode.offsetWidth - width) < 0 ? "0" : ((container.parentNode.offsetWidth - width)/2 + "px");
	}	
}