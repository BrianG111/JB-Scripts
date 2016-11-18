var newAnchor = document.createElement("a");
var newAnchor = document.createElementNS(
	"http://www.w3.org/1999/xhtml", "a");
var anchorText = document.createTextNode("monoceros");
var textNode = document.createTextNode("monoceros");
var oldText = textNode.nodeValue;
textNode.nodeValue = "pyxis";

var anchorText = document.createTextNode("monoceros");

var newAnchor = document.createElement("a");
newAnchor.appendChild(anchorText);

var parent = document.getElementById("starLinks");
var newChild = parent.appendChild(newAnchor);