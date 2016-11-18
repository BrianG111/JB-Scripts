addLoadListener(function()
{
    var img = document.getElementById('father')

    var newimg = new Image();

    newimg.onload = function()
    {
        img.src = newimg.src;
        img.width = newimg.width;
        img.height = newimg.height;
    }

    newimg.src = 'chewbacca.gif'
});