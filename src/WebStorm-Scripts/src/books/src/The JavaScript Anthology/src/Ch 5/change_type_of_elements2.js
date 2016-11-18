var div = document.createElement("div");
var paragraph = document.getElementById("starLinks");

while (paragraphNode.childNodes.length > 0){
	div.appendChild(paragraphNode.firstChild);
	}

	paragraph.parentNode.replaceChild(div, paragraph);