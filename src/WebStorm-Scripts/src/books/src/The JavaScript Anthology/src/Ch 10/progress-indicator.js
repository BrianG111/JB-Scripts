function progressBy(n)
{
    var prog = document.getElementById('progress')

    var current = parseInt(prog.firstChild.nodeValue, 10);
    current += n;
    if (current > 100) { current = 100; }

    prog.style.width = (n * 2) + 'px';
    prog.firstChild.nodeValue = current + '%';
}

function progressTo(n)
{
    var prog = document.getElementById('progress');

    prog.style.width = (n * 2) + 'px';
    prog.firstChild.nodeValue = n + '%';
}
 addLoadListener(function()
 {
     var photoNames = ['mountains', 'cliffs', 'moon'];
     var photoObjects = [];

     for (var i = 0; i < photoNames.length; i++)
     {
         photoObjects[i] = new Image();
         photoObjects[i].src = 'images/' + photoNames[i] + '.jpg';

         photoObjects[i].onload = function()
         {
             progressBy(Math.ceil(Math.ceil(100 / photoNames.length));
         }
     }
 });