var star2 = document.getElementById("star1").nextSibling;

while (star2.nodeType == "3")
{
	star2 = star2.nextSibling;
}