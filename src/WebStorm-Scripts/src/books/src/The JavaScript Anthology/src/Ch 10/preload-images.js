var imgNames = ['luke', 'obi-wan', 'chewbacca', 'han'];
var imgObjects = [];

for (var i = 0; i < imgNames.length; i++)
{
    imgObjects[i] = new Image();
    imgObjects[i].src = imgNames[i] + '.gif';
}