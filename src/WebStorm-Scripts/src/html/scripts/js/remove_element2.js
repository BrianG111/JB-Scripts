var parent = document.getElementById("starLinks");
var container = document.getElementById("starContainer");

while (parent.childNodes.length > 0)
{
    container.insertBefore(parent.childNodes[0], parent);
}

container.removeChild(parent);