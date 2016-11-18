var div = document.createElement("div");
var paragraph = document.getElementById("starLinks");

for (var i = 0; < paragraph.childNodes.length; i++)
{
	var clone = paragraph.childNodes[i].cloneNode(true);

	div.appendChild(clone);
}

paragraph.parentNode.replaceChild(div, paragraph);

div.id = paragraph.getAttribute("id");
div.className = paragraph.className;