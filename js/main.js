
window.onload = gallery;
 
function gallery()
{
	//loop through nav links and add on clicks
	var nav = document.getElementById('myLinks');
	var links = nav.getElementsByTagName('A');
	var pic = document.getElementById('placeholder');
	var caption = document.getElementById('caption');
	
	for(var i=0; i < links.length; i++)
	{
		links[i].onclick = function(){
			pic.src = this.href;
			caption.firstChild.nodeValue = this.title;
			return false;
		};
	}
}

